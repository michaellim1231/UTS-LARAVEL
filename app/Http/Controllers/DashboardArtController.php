<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DashboardArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $title = 'Art';
        $arts = Art::all();
        return view('artpage', compact('arts','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arts = Art::all();
        return view('create', compact('arts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $artcode = Str::upper(Str::substr($request->ARTCODE, 0,3));
        $image = time() . '-' . $request['image']->getClientOriginalName();
        $request->image->move(public_path('storage/'), $image);
        Art::create([
            'ARTCODE' => $artcode,
            'ARTNAME' => $request->ARTNAME,
            'ARTTYPE' => $request->ARTTYPE,
            'ARTISTCODE' => $request->ARTISTCODE,
            'image' => $image
            
        ]);

        return redirect(route('art.index'))->with('success', 'Post has been created!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        //
        // $title = "Art";

        // $arts = Art::where('ARTCODE',$art)->first();
        // return view('show', compact('arts','title'));
        return view('show',[
            'arts' => $art
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        return view('edit', [
            'arts' => $art
        ]);

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {
        $artcode = Str::upper(Str::substr($request->ARTCODE, 0,3));

        $arts = Art::findOrFail($art->id);

        $arts->update([
            'ARTCODE' => $artcode,
            'ARTNAME' => $request->ARTNAME,
            'ARTTYPE' => $request->ARTTYPE,
            'ARTISTCODE' => $request->ARTISTCODE
        ]);

        return redirect(route('art.index'))->with('success', 'Post has been updated!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        Art::destroy($art->id);
        return redirect(route('art.index'))->with('success', 'Post has been deleted!');
        //
    }
}
