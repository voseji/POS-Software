<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';
  
    protected $fillable = ['productCode', 'invoiceNumber', 'batchNumber', 'quantityReceived', 'quantitySold', 'manufacturerId', 'receivedBy'];

}
