<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function botarga() {
        return $this->belongsTo(Botarga::class);
    }
}
