<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'id',
        'full_name',
        'email',
        'password',
        'username',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'id'=> 'string'
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function ($model){
            $model->id = Str::uuid();
        });
    }
}
