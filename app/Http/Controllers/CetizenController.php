<?php

namespace App\Http\Controllers;

use App\Models\Cetizen;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CetizenController extends Controller
{
    public function index()
    {
        $cetizens = Cetizen::orderBy('id')->get();
        return Inertia::render('Citizen', ['cetizens' => $cetizens]);
    }

    public function create(){
        return inertia("Create");
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'bod' => 'required',
            'address' => 'required'
        ]);

        Cetizen::create($request->all());

        return redirect('/Citizens');
    }

    public function edit($id)
    {
        $cetizen = Cetizen::findOrFail($id);
        return inertia('Edit', [
            'cetizen' => $cetizen
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'bod' => 'required',
            'address' => 'required'
        ]);

        $cetizen = Cetizen::findOrFail($id);
        $cetizen->update($request->all());

        return redirect('/Citizens');
    }

    public function destroy($id)
    {
        $cetizen = Cetizen::findOrFail($id);
        $cetizen->delete();

        return redirect()->route('cetizen.index')->with('success', 'Citizen deleted successfully.');
    }

}
