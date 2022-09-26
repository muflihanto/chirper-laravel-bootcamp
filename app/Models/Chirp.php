<?php

namespace App\Models;

use App\Events\ChirpCreated;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
