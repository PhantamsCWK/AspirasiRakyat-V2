<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
        public function category()
        {
            return $this->belongsTo(Category::class);
        }
    
        public function penduduk()
        {
            return $this->belongsTo(Penduduk::class, 'nik', 'nik');
        }
}
