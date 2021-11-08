<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DashboardArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $title = 'Artist';
        // $artists = Artist::all();
        // return view('artistpage', compact('artists','title'));
        //
        $artists = Artist::all();
        return view('artistpage', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $artists = Artist::all();
        return view('createArtist', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $artcode = Str::upper(Str::substr($request->ARTCODE, 0,3));

        Artist::create([
            'ARTCODE' => $artcode,
            'ARTISTNAME' => $request->ARTISTNAME,
            'NOTELP' => $request->NOTELP,
            'ADDRESS' =>$request->ADDRESS
        ]);

        return redirect(route('artist.index'))->with('success', 'Post has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
        return view('showArtist',[
            'artists' => $artist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
        return view('editArtist', [
            'artists' => $artist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        //
        $artcode = Str::upper(Str::substr($request->ARTCODE, 0,3));

        $artists = Artist::findOrFail($artist->ARTCODE);

        $artists->update([
            'ARTCODE' => $artcode,
            'ARTISTNAME' => $request->ARTISTNAME,
            'NOTELP' => $request->NOTELP,
            'ADDRESS' =>$request->ADDRESS
        ]);

        return redirect(route('artist.index'))->with('success', 'Post has been updated!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        //
        Artist::destroy($artist->ARTCODE);
        return redirect(route('artist.index'))->with('success', 'Post has been deleted!');
    }
}
