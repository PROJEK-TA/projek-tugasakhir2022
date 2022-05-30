<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonaktifProduct extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "nonaktif_products";
    protected $fillable= ['id', 'dekripsi','jumlah', 'tanggal_nonaktif', 'id_product', 'id_statusbarang' ];

    public function barang()
    {
        return $this->hasOne(Product::class);
    }

    public function status()
    {
        return $this->hasMany(StatusProduct::class);
    }



}
