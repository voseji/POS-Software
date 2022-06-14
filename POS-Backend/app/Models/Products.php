<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'productCode';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['productCode', 'productName', 'productDescription', 'manufacturerId', 'landedCost', 'markUp', 'discount', 'retailCost'];
}
