<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'company_name',
        'agency_name',
        'gender',
        'account_number',
        'phone',
        'email',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'country',
        'note'
    ];
}
