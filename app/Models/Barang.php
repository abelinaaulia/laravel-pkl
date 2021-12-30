<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
     //memberikan akses data apa saja yang bisa dilihat
     protected $visible =['nama_barang','stok','kondisi'];
     //memberikan akses data apa saja yang bisa diisi
     protected $fillable =['nama_barang','stok','kondisi'];
     //mencatat waktu pembuatan dan update data otomatis
     public $timestamps = true;

     public function barang_masuk(){
        return $this->belongsTo('App\Models\Barang_Masuk','id_barang_masuk');
}
}
