<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable=['id','nama_departemen'];

    public function barang()
    {
        return $this->hasMany(Product::class);
    }
}
