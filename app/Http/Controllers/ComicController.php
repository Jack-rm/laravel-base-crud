<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comics = Comic::orderBy('title', 'asc')->orderBy('series', 'asc')->get();

        $title = "My Comics";

        $search = $request->query('search');

        if ($search != null) {

            $comics = Comic::where("title", "LIKE", "$search%")->get();

        }

        return view('comics.index', compact('comics', 'title', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Comic $comic)
    {
        $comic = new Comic();
        
        return view('comics.create', compact('comic','request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();

        $comic = Comic::create($data);  // Fillables necessari

        $comic->save();

        return redirect()->route('comic.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::where('slug', $slug)->first(); - Devo inserirlo come dato nel DB ? -

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic, Request $request)
    {
        return view('comics.edit', compact('comic', 'request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index')->with('delete', $comic->title);
    }
}
