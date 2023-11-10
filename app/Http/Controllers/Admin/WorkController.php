<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Artist;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreWorkRequest;
use Illuminate\Support\Str;


class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // non posso usare la dependency injection di Artist, ma solo di Work
    {
        $user = Auth::user();
        $artist = Artist::where('user_id', $user->id)->first();
        return view('admin.works.index', compact('artist', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $user = Auth::user();
        $artist = Artist::where('user_id', $user->id)->first();
        return view('admin.works.create', compact('artist', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkRequest $request)
    {
        $user = Auth::user();
        $artist = Artist::where('user_id', $user->id)->first();
        $validated_data = $request->validated();
        $validated_data['artist_id'] = $artist->id;
        $validated_data['slug'] = Str::slug($validated_data['title'], '-') . $user->id;

        $newWork = Work::create($validated_data);

        //dd($newWork);
    
        return redirect()->route('admin.works.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
