<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $guarded = ['id'];

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function pesan()
    {
        return $this->hasMany(Pesan::class);
    }
}
