<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SongRequest;
use App\Enums\SongRequestStatus;

class DjController extends Controller
{
    public function index()
    {
        $pendingRequests = SongRequest::where('status', SongRequestStatus::Pending)->get();
        $queueCount = SongRequest::where('status', SongRequestStatus::Pending)->count();

        return view('dj.index', [
            'queueCount' => $queueCount,
            'pendingRequests' => $pendingRequests
        ]);
    }

    public function play(SongRequest $songRequest){
        $songRequest->status = SongRequestStatus::Played;
        $songRequest->save();

        return redirect('/dj');
    }

    public function reject(SongRequest $songRequest){
        $songRequest->status = SongRequestStatus::Rejected;
        $songRequest->save();

        return redirect('/dj');
    }
}
