<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hama extends Model
{
    use HasFactory;
    protected $table = "hamas";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_hama',
        'foto_hama',
        'deskripsi_hama',
        'solusi_hama',
        'kode_obat',
    ];

    public function obat(){
        return $this->belongsTo(obat::class, 'kode_obat');
    }

    public function gejala(){
        return $this->belongsToMany(gejala::class)->withTimestamps();
    }

    public function gejalas(){
        return $this->belongsToMany(gejala::class, 'gejala_hama', 'hama_id', 'gejala_id');
    }
}
