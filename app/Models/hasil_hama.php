<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_hama extends Model
{
    use HasFactory;
    protected $table = "hasil_hama";
    protected $primaryKey = 'id';
    protected $fillable = [
        'datetime',
        'hama_id',
        'user_id'
    ];

    public function gejalaHama(){
        return $this->belongsToMany(gejala::class)->withTimestamps();
    }
    public function user(){
        return $this->belongsTo(gejala::class, 'user_id');
    }

    public function hama(){
        return $this->belongsTo(hama::class, 'hama_id');
    }
}
