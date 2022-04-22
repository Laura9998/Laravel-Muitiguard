<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    public $table='verify_users';

    protected $fillable = [
        'user_id', 'token',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
