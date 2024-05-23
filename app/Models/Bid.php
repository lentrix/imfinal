<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    public function entity() {
        return $this->belongsTo('App\Models\Entity');
    }

    public function bidding() {
        return $this->belongsTo('App\Models\Bidding');
    }
}
