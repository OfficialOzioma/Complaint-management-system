<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function complains()
    {
        return $this->belongsToMany(Complaint::class);
    }

    public function issues()
    {
        return $this->belongsToMany(Issue::class);
    }
}