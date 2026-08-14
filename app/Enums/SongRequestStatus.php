<?php

namespace App\Enums;

enum SongRequestStatus: string {
    case Pending = "pending";
    case Played = "Played";
    case Rejected = "rejected";
}