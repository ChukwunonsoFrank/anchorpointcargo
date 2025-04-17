<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function edit(Request $request)
    {
        $user_id = $request->id;
        $user = User::where('id', $user_id)->first();
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $user_id = $request->id;
        User::where('id', $user_id)->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'address' => $request->address,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'marital_status' => $request->marital_status,
            'account_type' => $request->account_type,
            'country' => $request->country,
            'phone' => $request->phone,
            'balance' => $request->balance * 100,
            'total_deposited' => $request->total_deposited * 100,
            'total_withdrawn' => $request->total_withdrawn * 100
        ]);
        $user = User::where('id', $user_id)->first();
        return view('admin.user.edit', ['user' => $user]);
    }

    public function create_debit_or_credit(Request $request)
    {
        $user_id = $request->id;
        return view('admin.user.debit-or-credit', ['user_id' => $user_id]);
    }
}
