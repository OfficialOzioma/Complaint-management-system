<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $guard = 'admin';

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
