<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $table = 'market';

    public function getData(){
        return $this->id.':'.$this->type.'('.$this->country1.'/'.$this->country2.')';
    }
}
