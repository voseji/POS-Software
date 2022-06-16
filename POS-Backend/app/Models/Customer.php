<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customerId';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['customerId', 'customerName', 'phoneNumber', 'email', 'addedBy'];

}
