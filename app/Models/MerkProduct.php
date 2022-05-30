<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkProduct extends Model
{
    use HasFactory;
    protected $table = "merk_products";
    protected $guarded=['id'];
    protected $fillable=['id','nama_merkbarang'];
}
