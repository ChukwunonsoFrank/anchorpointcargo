<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sender_fullname',
        'sender_email',
        'sender_phone',
        'sender_residential',
        'receiver_fullname',
        'receiver_email',
        'receiver_phone',
        'receiver_residential',
        'package_image',
        'longitude',
        'latitude',
        'packaging',
        'carrier',
        'carrier_reference',
        'status',
        'status_description',
        'package_quantity',
        'total_freight',
        'weight',
        'star_points',
        'shipment_mode',
        'depature_date',
        'delivery_date',
        'pickup_date',
    ];
}
