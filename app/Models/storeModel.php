<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storeModel extends Model
{
    protected $table = "store";
    use HasFactory;
    protected $fillable = ['name','openingDate'];
}
