<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemasok extends Model
{
     use HasFactory;

   protected $fillable = ['nama', 'kontak'];

   public function barangs()
   {
    return $this->hasMany(Barang::class, 'pemasok_id');
   }
}
