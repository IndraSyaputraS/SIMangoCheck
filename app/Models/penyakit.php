<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class penyakit extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "penyakit";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_penyakit',
        'foto_penyakit',
        'deskripsi_penyakit',
        'solusi_penyakit',
        'penyakit_id',
    ];
}
