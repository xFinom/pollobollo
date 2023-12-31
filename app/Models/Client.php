<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name', // Add this line
        'phone',
        'address',
        'email',
        // other attributes...
    ];
    public function events() {
        return $this->hasMany(Events::class);
    }

    public function rentals() {
        return $this->hasMany(Rentals::class);
    }

    public function deliveries() {
        return $this->hasMany(GifDeliveries::class);
    }
}
