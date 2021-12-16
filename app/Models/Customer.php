<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table='customer';
    protected $fillable=[
        'name',
        'last_name',
        'personal_phone',
        'contact_phone',
        'email',
        'gender',
        'address',
        'state',
        'city',
        'suburb',
        'birth_date',
        'zip_code',
        'password'];
}
