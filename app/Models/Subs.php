<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subs extends Model
{
    public $table = 'Subs';

    public $fillable = ['ime_i_prezime','email'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
