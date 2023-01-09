<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecomicsRequest;
use App\Http\Requests\UpdatecomicsRequest;
use App\Models\comics;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(comics::all());
        $comics_list = comics::all();
        return view('comics.index', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comics_list = config('comics');

        return view('comics.create', $comics_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecomicsRequest $request)
    {



        $comic = [
            'title' => $request['title'],
            'description' => $request['description'],
            'thumb' => $request['thumb'],
            'price' => $request['price'],
            'series' => $request['series'],
            'sale_date' => $request['sale_date'],
            'type' => $request['type']
        ];


        $newComic = new comics();
        $newComic->title = $comic['title'];
        $newComic->description = $comic['description'];
        $newComic->thumb = $comic['thumb'];
        $newComic->price = $comic['price'];
        $newComic->series = $comic['series'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->type = $comic['type'];
        $newComic->save();

        // Comic::create($data);

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(comics $comic)
    {

        $comics_list = config('comics');

        return view('comics.show', compact('comic'), $comics_list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comics $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(comics $comic)
    {
        $comics_list = config('comics');

        return view('comics.edit', compact('comic'), $comics_list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecomicsRequest  $request
     * @param  \App\Models\comics  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecomicsRequest $request, comics $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return to_route('comics.index')->with('message', "$comic->title modified successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(comics $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', "$comic->title delete successfully");
    }
}
