<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->all();
        $newComic = new Comic();

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];

        $storeData['slug'] = Str::slug($newComic->title, '-');
        // $newComic->fill($storeData);
        // $newComic->save();
        $newComic->create($storeData);
        return redirect()->route('comics.show', $storeData['slug']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        // $comic = Comic::where('slug', $slug)->first();
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sentData = $request->all();
        $comic = Comic::findOrFail($id);
        $sentData['slug'] = Str::slug($sentData['title'], '-') . '-' . $comic->id;
        // $comic->fill($sentData);
        // $comic->save();
        $comic->update($sentData);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
