<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Http\Request;

class ReferencielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'libelleReferentiel' => 'required',
            'type_id' => 'required',
            'horaire' => 'required',
        ]);

        $referentiel = new Referentiel();
        $referentiel->libelleReferentiel = $request->input('libelleReferentiel');
        $referentiel->type_id = $request->input('type_id');
        $referentiel->horaire = $request->input('horaire');
        $referentiel->save();
        return redirect()->back()->with('success', 'referentiel ajouté avec succès.');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('formation', ['referenciel' => Referentiel::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $referentiel = Referentiel::findOrFail($id);
        return view('editionReferentiel', compact('referentiel'));
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
        $referentiel = Referentiel::findOrFail($id);
        $referentiel->libellereferentiel = $request->input('libelleReferentiel');
        $referentiel->horaire = $request->input('horaire');
        $referentiel->save();
        return redirect()->route('gestionReferentiels')->with('success', 'Le referentiel a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Referenciel = Referentiel::find($id);
        $Referenciel->delete();

        // Rediriger vers la liste des utilisateurs
        return redirect()->back()->with('success', 'Référentiel supprimé avec succès.');
    }

    public function forByRef()
    {
        return view('nbfore', ['referentiels' => Referentiel::withCount('formations')->get()]);

    }

    public function gestionReferentiels(Request $request)
    {
        $types = Type::all();
        $referentiels = Referentiel::all();
        return view('gestionReferentiel', [
            'types' => $types,
            'referentiels' => $referentiels,
        ]);
    }
}
