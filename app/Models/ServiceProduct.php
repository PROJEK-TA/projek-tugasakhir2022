<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProduct extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "service_products";
    protected $fillable= ['deskripsi', 'jumlah', 'nama_petugas', 'tanggal_servis', 'tanggal_kembali', 'id_product', 'id_merk'];



    public function barang()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function merk()
    {
        return $this->belongsTo(MerkProduct::class, 'id_merk');
    }

}
