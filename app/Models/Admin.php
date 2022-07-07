<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}