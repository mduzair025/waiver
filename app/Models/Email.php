<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    // details of the email

    protected $fillable = ['email'];

    public function details(){
        return $this->hasMany(EmailDetail::class, 'email_id', 'id')->latest();
    }

    public function detail(){
        return $this->hasOne(EmailDetail::class);
    }

    public function minors(){
        return $this->hasMany(Minor::class)->latest();
    }
}
