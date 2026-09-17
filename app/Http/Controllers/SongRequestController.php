<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SongRequest;
use App\Enums\SongRequestStatus;

class SongRequestController extends Controller
{
    public function create()
    {
        return view('request');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:50',
            'artist' => 'required|string|max:50',
            'song' => 'required|string|max:50',
        ],
        [
        'artist.required' => 'Vul een artiest in.',
        'artist.string' => 'De artiest moet tekst zijn.',
        'artist.max' => 'De artiest mag maximaal 50 tekens bevatten.',

        'song.required' => 'Vul een liedje in.',
        'song.string' => 'Het liedje moet tekst zijn.',
        'song.max' => 'Het liedje mag maximaal 50 tekens bevatten.',

        'name.string' => 'Je naam moet tekst zijn.',
        'name.max' => 'Je naam mag maximaal 50 tekens bevatten.',
    ]);

        SongRequest::create($validated);
        return redirect()->route('request.create')->with('success', 'Je nummer is toegevoegd aan de wachtrij.');
    }

    public function index(){
        $songRequests = SongRequest::where(
            'status',
            SongRequestStatus::Pending
        )
        ->orderBy('created_at', 'asc')
        ->get();
        return view('queue', ['songRequests' => $songRequests]);
    }
}
