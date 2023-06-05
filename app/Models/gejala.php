<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;
    protected $table = "gejalas";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_gejala',
    ];

    public function aturan_penyakit(){
        return $this->hasMany(aturan_penyakit::class);
    }

    public function penyakit(){
        return $this->belongsToMany(penyakit::class);
    }

    public function hama(){
        return $this->belongsToMany(hama::class);
    }  
    
    public function hasil(){
        return $this->hasMany(hasil::class, 'id');
    }
    public function hasil_gama(){
        return $this->hasMany(hasil_hama::class, 'id');
    }
}
