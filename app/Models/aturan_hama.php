<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aturan_hama extends Model
{
    use HasFactory;
    protected $table = "gejala_hama";
    protected $primaryKey = 'id';
    protected $fillable = [
        'hama_id',
        'gejala_id',
    ];
}
