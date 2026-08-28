<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComboPackDispatches extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'combo_pack_id',
        'order_id',
        'status',
    ];
}