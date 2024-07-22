<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteOption extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'visi', 'misi'];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
