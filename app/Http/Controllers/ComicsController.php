<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(6);
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
        $data = $request->all();

        Validator::make(
            $data,
            [
                'title' => 'required|string|max:50',
                'description' => 'required',
                'thumb' => 'required',
                'type' => 'required|string|in:graphic novel, comic book',
                'series' => 'required|string|max:50',
                'price' => 'required',
                'sale_date' => 'required'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.string' => 'Il titolo deve essere una stringa',
                'title.max' => 'Il titolo deve avere massimo 50 caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'thumb.required' => 'La copertina è obbligatoria',
                'type.required' => 'Il tipo è obbligatorio',
                'type.string' => 'Il tipo deve essere una stringa',
                'type.in' => 'Il titolo deve essere uno tra graphic novel e comic book',
                'series.required' => 'La serie è obbligatoria',
                'series.string' => 'La serie deve essere una stringa',
                'series.max' => 'La serie deve avere massimo 50 caratteri',
                'price.required' => 'Il prezzo è obbligatorio',
                'sale_date.required' => 'La data è obbligatoria'
            ]
            )->validate();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        
        $comic ->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
