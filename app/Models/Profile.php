<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'gender',
        'phone',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'country',
        'image'
    ];

    /*
    |----------------------------------------------------------------------
    | One to one relation with User Model
    |----------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
