<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;

    protected $attributes =[
        'arung' => "arung"
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    protected $fillable = [
        'message',
        'arung'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
