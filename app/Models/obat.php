<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class obat extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'nama_obat',
        'deskripsi_obat',
        'harga_obat',
    ];
}
