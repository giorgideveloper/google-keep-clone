<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function notes() {
        return $this->hasMany(Note::class);
    }
}
