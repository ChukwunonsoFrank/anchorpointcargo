<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('orders.index', [
            'orders' => $orders
        ]);
    }

    public function generateRandomWord($length = 4)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // Letters and digits
        return substr(str_shuffle($characters), 0, $length);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $package_image_path = $request->file('package-image');
        if (! is_null($package_image_path)) {
            $package_image_path = $package_image_path->store('package-images', 'public');
        }

        Order::create([
            'sender_fullname' => $request->sender_fullname,
            'sender_email' => $request->sender_email,
            'sender_phone' => $request->sender_phone,
            'sender_residential' => $request->sender_residential_address,
            'receiver_fullname' => $request->receiver_fullname,
            'receiver_email' => $request->receiver_email,
            'receiver_phone' => $request->receiver_phone,
            'receiver_residential' => $request->receiver_residential_address,
            'package_image' => $package_image_path ?? 'package-images/default-package-image.png',
            'packaging' => $request->packaging,
            'carrier' => $request->carrier,
            'carrier_reference' => strtoupper($this->generateRandomWord()) . '-' . rand(1000, 9999) . '-' . strtoupper($this->generateRandomWord()),
            'status' => $request->status,
            'status_description' => $request->status_description,
            'longitude' => floatval($request->longitude),
            'latitude' => floatval($request->latitude),
            'package_quantity' => $request->package_quantity,
            'total_freight' => $request->total_freight,
            'weight' => $request->weight,
            'star_points' => $request->star_points,
            'shipment_mode' => $request->shipment_mode,
            'depature_date' => $request->depature_date,
            'delivery_date' => $request->delivery_date,
            'pickup_date' => $request->pickup_date,
        ]);

        return redirect('/orders')->with('message', 'Order created successfully!');
    }

    public function edit(Request $request)
    {
        $order = Order::where('id', $request->order_id)->first();
        return view('orders.edit', [
            'order' => $order
        ]);
    }

    public function update(Request $request)
    {
        $id = intval($request->input('__id'));
        $updated_package_image = '';
        $package_image_path = $request->file('package-image');

        if (is_null($package_image_path)) {
            $updated_package_image = $request->current_package_image;
        } else {
            $updated_package_image = $package_image_path->store('package-images', 'public');
        }

        Order::where("id", $id)->update([
            'sender_fullname' => $request->sender_fullname,
            'sender_email' => $request->sender_email,
            'sender_phone' => $request->sender_phone,
            'sender_residential' => $request->sender_residential_address,
            'receiver_fullname' => $request->receiver_fullname,
            'receiver_email' => $request->receiver_email,
            'receiver_phone' => $request->receiver_phone,
            'receiver_residential' => $request->receiver_residential_address,
            'package_image' => $updated_package_image,
            'packaging' => $request->packaging,
            'carrier' => $request->carrier,
            'carrier_reference' => $request->carrier_reference,
            'status' => $request->status,
            'status_description' => $request->status_description,
            'longitude' => floatval($request->longitude),
            'latitude' => floatval($request->latitude),
            'package_quantity' => $request->package_quantity,
            'total_freight' => $request->total_freight,
            'weight' => $request->weight,
            'star_points' => $request->star_points,
            'shipment_mode' => $request->shipment_mode,
            'depature_date' => $request->depature_date,
            'delivery_date' => $request->delivery_date,
            'pickup_date' => $request->pickup_date,
        ]);
        return back()->with('message', 'Order updated successfully!');
    }

    public function destroy(Request $request)
    {
        $order = Order::find(intval($request->order_id));
        $order->delete();
        return back()->with('message', 'Order deleted successfully!');
    }

    public function track(Request $request)
    {
        $order = Order::where('carrier_reference', $request->order_id)->first();
        if (! $order) {
            return back()->with('message', 'Invalid Tracking Code.');
        }
        return view('frontend.details', [
            'order' => $order
        ]);
    }

    public function generate(Request $request)
    {
        $order_id = $request->query("order_id");
        $order = Order::find($order_id);
        return view('invoice.index', [
            'order' => $order
        ]);
    }
}
