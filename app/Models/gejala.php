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

    public function aturan(){
        return $this->hasMany(aturan::class);
    }

    public function penyakit(){
        return $this->belongsToMany(penyakit::class);
    }

    public function hama(){
        return $this->belongsToMany(hama::class);
    }     
}
