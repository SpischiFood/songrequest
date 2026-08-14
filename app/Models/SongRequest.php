<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\SongRequestStatus;

class SongRequest extends Model
{
    protected $fillable = [
        'artist',
        'song',
        'name',
    ];

    protected function casts(): array
    {
        return [
            'status' => SongRequestStatus::class
        ];
    }
}
