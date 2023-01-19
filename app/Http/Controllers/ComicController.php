<?php

namespace App\Http\Controllers;

//questa dicitura fa usare il modello Comic e va aggiunta a mano
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        // attribuisco a $comics il valore di tutta la tabella del modello Comic
        $comics = Comic::all();



        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //$data = Request::All();

       $data = $request->all();
       //con il metodo all() ripulisce l'array risultante da tutte le informazioni aggiuntive

       // si crea un istanza della classe Request

       $new_comic = new Comic();
       $new_comic->title = $data['title'];
       $new_comic->description = $data['description'];
       $new_comic->thumb = $data['thumb'];
       $new_comic->price = $data['price'];
       $new_comic->series = $data['series'];
       $new_comic->sale_date = $data['sale_date'];
       $new_comic->type = $data['type'];
      //senza save non si salvano i dati nel database
       $new_comic->save();
       //visto che la pagina di store e' una pagina di intermezzo e non va bene per l'atterraggio, si reindirizza l'utente su una pagina piu' consona
       return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //con la funzione find or fail recupera l'id
        $single_comic = Comic::findOrfail($id);

        return view("pages.comics.show", compact('single_comic') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
