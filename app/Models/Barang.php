<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

   protected $fillable = ['nama', 'stok', 'category_id', 'pemasok_id'];

   public function category()
   {
    return $this->belongsTo(Category::class, 'category_id');
   }

   public function pemasok()
   {
    return $this->belongsTo(Pemasok::class, 'pemasok_id');
   }
}
