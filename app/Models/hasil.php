<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class hasil extends Model
{
    use HasFactory;
    protected $table = "hasils";
    protected $primaryKey = 'id';
    protected $fillable = [
        'datetime',
        'penyakit_id',
        'user_id'
    ];

    public function gejala(){
        return $this->belongsToMany(gejala::class)->withTimestamps();
    }
    public function user(){
        return $this->belongsTo(gejala::class, 'user_id');
    }

    public function penyakit(){
        return $this->belongsTo(penyakit::class, 'penyakit_id');
    }
}
