<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function podcasts()
    {
        return $this->hasMany(Podcast::class);
    }

    public function artists()
    {
        return $this->hasMany(Artist::class);
    }
}
