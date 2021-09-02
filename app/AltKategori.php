<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltKategori extends Model
{

    public function altkategori()
    {
        return $this->hasMany(AltKategori::class);
    }

}
