<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Artist;

class ArtistAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        // Verifica se esiste un profilo artista con lo stesso user_id
        $artistProfile = Artist::where('user_id', $user->id)->first();

        if (!$artistProfile) {
            abort(403, 'Unauthorized'); // Se non esiste un profilo artista, genera un errore 403
        }

        return $next($request);
    }
}
