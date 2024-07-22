<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = ['vote_option_id', 'user_id'];

    public function voteOption()
    {
        return $this->belongsTo(VoteOption::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
