<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        return People::all();
    }
    public function create()
    {
        return response()->json(['error' => 'Method Not Allowed'], 405);
    }
    public function store(Request $request)
    {
        $person = People::create($request->all());
        return response()->json(['person' => $person, 'message' => 'Person created successfully'], 201);
    }

    public function show($id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        return response()->json(['person' => $person], 200);
    }
    public function edit($id)
    {
        return response()->json(['error' => 'Method Not Allowed'], 405);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        $person = People::find($id);
        if (!$person) {
            return response()->json(['error' => 'Person not found'], 404);
        }
         $person->update($request->all());
        return response()->json(['person' => $person, 'message' => 'Person updated successfully'], 200);
    }

    public function destroy($id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        $person->delete();

        return response()->json(['message' => 'Person deleted successfully'], 200);
    }
}
