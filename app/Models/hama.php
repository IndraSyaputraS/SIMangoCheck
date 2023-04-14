<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hama extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'nama_hama',
        'foto_hama',
        'deskripsi_hama',
        'solusi_hama',
    ];
}
