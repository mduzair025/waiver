<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minor extends Model
{
    use HasFactory;

    protected $guarded = ['_token'];

    public function email(){
        return $this->belongsTo(Email::class);
    }

    public function emailDetail(){
        return $this->belongsTo(EmailDetail::class);
    }
}
