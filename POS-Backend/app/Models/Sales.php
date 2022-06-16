<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'salesId';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['salesId', 'productCode', 'batchNumber', 'manufacturerId', 'paymentMode', 'quantity', 'status', 'landedCost', 'markUp', 'discount', 'retailCost', 'soldBy'];

}
