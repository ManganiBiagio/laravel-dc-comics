<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view("comics.index",compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {

        $data=$request->validated();
        $data=$request->all();

        $comic=new Comic();
            $comic->title=$data["title"];
            $comic->description=$data["description"];
            $comic->thumb="placeholder";
            $comic->price=(float) $data["price"];
            $comic->series=$data["series"];
            $comic->sale_date="2019-04-10";
            $comic->type=$data["type"];

            $comic->save();

            return redirect()->route("comics.show",$comic->id)->with("status","Fumetto aggiunto con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $comic=Comic::findOrFail($id);
        return view("comics.show",compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $comic=Comic::findOrFail($id);
        return view("comics.edit",compact("comic"));
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
        $data=$request->all();

        $comic=Comic::findOrFail($id);
            $comic->title=$data["title"];
            $comic->description=$data["description"];
            $comic->price=(float) $data["price"];
            $comic->series=$data["series"];
            $comic->type=$data["type"];

            $comic->save();

            return redirect()->route("comics.show",$comic->id)->with("status","Fumetto modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic=Comic::findOrFail($id);

        $comic->delete();
        return redirect()->route("comics.index");
    }
}
