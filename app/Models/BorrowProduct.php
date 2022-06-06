<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowProduct extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "borrow_products";
    protected $fillable= ['nama_peminjam', 'jumlah', 'deskripsi', 'tanggal_pinjam', 'tanggal_kembali','status', 'id_product', 'id_lokasi', 'id_merk', 'id_department'];

    public function barang() 
    {
        return $this->belongsTo(Product::class, 'id_product');

    }

    public function merk() 
    {
        return $this->belongsTo(MerkProduct::class, 'id_merk');
        
    }

    public function lokasi() 
    {
        return $this->belongsTo(LocationProduct::class, 'id_lokasi');
        
    }

    public function departemen() 
    {
        return $this->belongsTo(Department::class, 'id_department');
        
    }



}
