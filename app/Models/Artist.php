<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $primaryKey = 'ARTCODE';
    protected $keyType = 'string';
    protected $fillable = ['ARTCODE', 'ARTISTNAME', 'NOTELP', 'ADDRESS'];

    public function getRouteKey()
    {
        return 'ARTCODE';
    }

    public function art(){
        return $this->hasMany(Art::class, 'ARTISTCODE', 'ARTCODE');
    }
}
