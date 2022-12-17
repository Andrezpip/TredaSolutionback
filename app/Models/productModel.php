<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table = "product";
    use HasFactory;
    protected $fillable = ['sku','description','valor','tienda','imagen'];
}
