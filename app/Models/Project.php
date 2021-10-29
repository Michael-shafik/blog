<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public $timestamps = true;





    protected $fillable = [
        'Description',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
