<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aturan_penyakit extends Model
{
    use HasFactory;
    protected $table = "gejala_penyakit";
    protected $primaryKey = 'id';
    protected $fillable=[
        'penyakit_id',
        'gejala_id',
    ];
}
