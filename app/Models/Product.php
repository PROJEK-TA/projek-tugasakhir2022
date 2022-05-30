<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "products";
    protected $fillable= ['id', 'nama_barang','merk', 'id_productcategory', 'id_room', 'id_department', 'harga_beli', 'jumlah', 'satuan', 'id_statusproduct' ];

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class, 'id_productcategory');
    }

    public function ruangan()
    {
        return $this->belongsTo(Room::class, 'id_room');
    }

    public function departemen()
    {
        return $this->belongsTo(Department::class, 'id_department');
    }

    public function status()
    {
        return $this->belongsTo(StatusProduct::class, 'id_statusproduct');
    }

    public function nonaktif()
    {
        return $this->belongsTo(NonaktifProduct::class);
    }
   
    
}
