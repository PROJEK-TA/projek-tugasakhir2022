<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowRoom extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "borrow_rooms";
    protected $fillable= ['nama_peminjam', 'deskripsi', 'tanggal_pinjam', 'tanggal_selesai', 'status', 'id_room', 'id_building'];

    public function ruangan() 
    {
        return $this->belongsTo(Room::class, 'id_room');
    }

    public function gudang() 
    {
        return $this->belongsTo(Building::class, 'id_building');
    }
}
