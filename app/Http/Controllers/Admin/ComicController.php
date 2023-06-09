<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Comic::all());
        $comics = Comic::orderByDesc('id')->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $val_data = $request->validate([
            'title' => 'required|max:255',
            'thumb' => 'nullable',
            'price' => 'nullable|max:20',
            'description' => 'nullable',
            'type' => 'nullable|max:100',
            'series' => 'nullable|max:255',
            'date' => 'nullable'

        ]);

        // $val_data = $request->validate([
        //     'name' => 'required|min:5|max:50',
        //     'image' => 'nullable|max:255',
        //     'price' => 'nullable',
        //     'description' => 'nullable'
        // ]);

        // dd($request->all());
        // dd($request->title);
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->thumb = $request->thumb;
        $comic->description = $request->description;
        $comic->price = $request->price;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->series = $request->series;
        $comic->save();

        return to_route('admin.comics.index')->with('message', "$comic->title added successfully");;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
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

        $val_data = $request->validate([
            'title' => 'required|max:255',
            'thumb' => 'nullable',
            'price' => 'nullable|max:20',
            'description' => 'nullable',
            'type' => 'nullable|max:100',
            'series' => 'nullable|max:255',
            'date' => 'nullable'

        ]);

        // $data = [
        //     'title' => $request->title,
        //     'thumb' => $request->thumb,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'sale_date' => $request->sale_date,
        //     'type' => $request->type,
        //     'series' => $request->series
        // ];

        $comic->update($val_data);
        // $comic->update($data);

        return to_route('admin.comics.index')->with('message', "$comic->title updated successfully");
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
        return to_route('admin.comics.index')->with('message', "$comic->title delete successfully");
    }
}
