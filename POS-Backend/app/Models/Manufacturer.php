<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'manufacturers';
    protected $primaryKey = 'manufacturerId';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['manufacturerId', 'manufacturerName', 'shortName'];

}
