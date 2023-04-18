<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\Type;

class FormationController extends Controller
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

        $formation = new Formation();
        $formation->nomFormation = $request->input('nomFormation');
        $formation->duree = $request->input('duree');
        $formation->description = $request->input('description');
        $formation->referentiel_id = $request->input('referentiel_id');
        $formation->save();
        return redirect()->back()->with('success', 'formation ajouté avec succès.');
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
        return view('ajout', ['formation' => Formation::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        return view('formationEdit', compact('formation'));
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
        $formation = Formation::findOrFail($id);
        $formation->nomFormation = $request->input('nomFormation');
        $formation->duree = $request->input('duree');
        $formation->description = $request->input('description');
        $formation->save();
        return redirect()->route('gestionformations')->with('success', 'La formation a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation = Formation::find($id);
        $formation->delete();

        // Rediriger vers la liste des utilisateurs
        return redirect()->back()->with('success', 'Formation supprimé avec succès.');
    }

    public function canByfor()
    {
        return view('dashboard', ['formations' => Formation::withCount('candidats')->get()]);

    }

    public function ForByType()
    {
        $types = Type::with('referentiels.formations')->get();
        return view('formationParType', ['types' => $types]);
    }

    public function afficherStatistiquesFormations()
    {
        $formations_en_cours = Formation::where('isStarted', true)->get();
        $formations_en_attente = Formation::where('isStarted', false)->get();

        return view('statform', compact('formations_en_cours', 'formations_en_attente'));
    }

    public function gestionFormations(Request $request)
    {
        $formations = Formation::all();
        $referentiels = Referentiel::all();
        return view('gestionFormation', [
            'formations' => $formations,
            'referentiels' => $referentiels,
        ]);
    }
}
