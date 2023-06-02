<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aturan extends Model
{
    use HasFactory;
    protected $table = "aturans";
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_penyakit',
        'kode_hama',
        'kode_gejala',
    ];

    public function penyakit(){
        return $this->belongsTo(penyakit::class, 'kode_penyakit');
    }
    public function hama(){
        return $this->belongsTo(hama::class, 'kode_hama');
    }
    public function gejala(){
        return $this->belongsTo(gejala::class, 'kode_gejala');
    }

    public function setGejala($value){
        $this->attributes['kode_gejala'] = json_encode($value);
    }

    public function getGejala($value){
        return $this->attributes['kode_gejala'] = json_decode($value);
    }
}
