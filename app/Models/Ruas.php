<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruas extends Model
{
    use HasFactory;
    
    protected $table = 'ruas';

    protected $fillable = [
        'ruas',
        'km_awal',
        'km_akhir',
        'status',
        'created_by',
        'updated_by'
    ];

    public function ruasCoordinates(){
        return $this->hasMany(RuasCoordinates::class);
    }
}
