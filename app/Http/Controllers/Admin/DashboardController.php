<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Artist;
use App\Models\Work;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $worksCount = 0;
        $artist = Artist::where('user_id', $user->id)->first();
        if ($artist) {
           $works = Work::where('artist_id', $artist->id)->get();
           $worksCount = $works->count();
        }
        return view('dashboard', compact('artist', 'user', 'worksCount'));
    }
}
