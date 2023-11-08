<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArtistRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('artists.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request) // ho sostituito Request con il nome del file del form request
    {
        $validated_data = $request->validated();
        $user = Auth::user();

        $existingArtist = Artist::where('user_id', $user->id)->first();

        if ($existingArtist) {
            // Un profilo artista già esiste per questo utente, puoi gestire l'errore o reindirizzare l'utente a una pagina appropriata
            return redirect()->route('admin.artists.index')
                ->with('error', 'Hai già un profilo artista.');
        } else {
            // Se non esiste un profilo artista, crea uno nuovo
            $validated_data['user_id'] = $user->id;
            $validated_data['slug'] = Str::slug($validated_data['nickname'], '-') . $user->id;
    
            $newArtist = Artist::create($validated_data);
    
            return redirect()->route('admin.artists.index')
                ->with('success', 'Profilo artista creato con successo.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        // info dell'artista nella show
        $user = Auth::user();
        $artist = Artist::where('slug', $slug)->first();
        return view('artists.show', compact('artist', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {   
        $user = Auth::user();
        $artist = Artist::where('slug', $slug)->first();
        return view('artists.edit', compact('artist', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
