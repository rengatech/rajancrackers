<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComboPackOrders extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'combo_pack_id',
        'quantity',
        'price',
    ];
}