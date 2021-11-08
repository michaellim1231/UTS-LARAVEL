<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{

    use HasFactory;
    protected $fillable = ['ARTCODE', 'ARTNAME', 'ARTTYPE','ARTISTCODE','image'];

    public function getRouteKey()
    {
        return 'ARTCODE';
    }

    public function artist(){
        return $this->belongsTo(Artist::class, 'ARTISTCODE', 'ARTCODE');
    }
}

