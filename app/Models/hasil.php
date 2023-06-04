<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
    use HasFactory;
    protected $table = "hasils";
    protected $primaryKey = 'id';
    protected $fillable = [
        'datetime',
        'gejala_id',
        'penyakit_id',
    ];
}
