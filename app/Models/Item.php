<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'supplier_id',
        'sku',
        'cost_price',
        'unit_price',
        'reorder_level',
        'quantity',
        'unit',
        'image',
        'tax',
        'location',
        'description'
    ];
}
