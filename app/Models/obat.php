<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $table = "obats";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_obat',
        'deskripsi_obat',
        'harga_obat',
    ];

    public function penyekit(){
        return $this->hasMany(penyakit::class, 'id');
    }
    public function hama(){
        return $this->hasMany(hama::class, 'id');
    }
}
