<?php

namespace App\Enums;

enum SongRequestStatus: string {
    case Pending = "pending";
    case Played = "played";
    case Rejected = "rejected";
}