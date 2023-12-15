<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailDetail extends Model
{
    use HasFactory;

    protected $guarded = ['_token'];
    
    public function email(){
        return $this->belongsTo(Email::class);
    }

    public function minors(){
        return $this->hasMany(Minor::class);
    }

}
