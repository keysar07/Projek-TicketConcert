<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode extends Model
{
    use HasFactory;

    protected $table = 'metodes';

    protected $guarded = ['id'];

    public function pesan()
    {
        return $this->hasMany(Pesan::class);
    }
}
