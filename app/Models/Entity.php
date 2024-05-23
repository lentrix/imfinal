<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    public function biddings() {
        return $this->hasMany('App\Models\Bidding');
    }

    public function bids() {
        return $this->hasMany('App\Models\Bid');
    }
}
