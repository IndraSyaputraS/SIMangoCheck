<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    use HasFactory;
    protected $table = "penyakits";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_penyakit',
        'deskripsi_penyakit',
        'solusi_penyakit',
        'kode_obat',
        'foto_penyakit',
    ];

    public function obat(){
        return $this->belongsTo(obat::class, 'kode_obat');
    }

    public function gejala(){
        return $this->belongsToMany(gejala::class)->withTimestamps();
    }

    public function hasil(){
        return $this->belongsToMany(hasil::class, 'id');
    }

    public function gejalas(){
        return $this->belongsToMany(gejala::class, 'gejala_penyakit', 'penyakit_id', 'gejala_id');
    }

}
