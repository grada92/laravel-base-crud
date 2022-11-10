<?php

namespace App\Http\Controllers;
use App\ComicsTable;
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
        $Comics = ComicsTable::all();
        return view('Comics.index', compact('Comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   // Aggiunto Validatore
        $request->validate([
            'Titolo'=> 'required|string|min:5|max:200',
            'Copertina'=> 'required|string|min:5|max:200',
            'type'=> 'required|string|min:5|max:200',
            'Description'=> 'required|string|min:5|max:400',


        ]);


        $data = $request->all();
        $newComics = new ComicsTable;
        $newComics->Titolo=$data['Titolo'];
        $newComics->Copertina=$data['Copertina'];
        $newComics->type=$data['type'];
        $newComics->Description=$data['Description'];


        $newComics->save();
        return redirect()->route('Comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Comic = ComicsTable::find($id);
        return view('Comics.Show', compact('Comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Comic = ComicsTable::find($id);
        return view('Comics.edit', compact('Comic'));
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
        $data = $request ->all();
        $comic_to_update = ComicsTable::find($id);
        $comic_to_update ->update($data);

        return redirect()->route('Comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ComicsTable=ComicsTable::find($id);
        $ComicsTable->DELETE();
        return redirect()->route('Comics.index');
    }
}
