<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function show() {
        return $this->belongsTo(Show::class);
    }
}
