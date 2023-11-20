<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Botarga extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function rentals() {
        return $this->hasMany(Rentals::class);
    }

    public function deliveries() {
        return $this->hasMany(GifDeliveries::class);
    }
}
