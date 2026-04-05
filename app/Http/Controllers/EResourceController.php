<?php

namespace App\Http\Controllers;

use App\Models\EResource;
use Illuminate\Http\Request;

class EResourceController extends Controller
{
    public function index()
    {
        $resources = EResource::all();
        return view('e-resources.index', compact('resources'));
    }

    public function create()
    {
        return view('e-resources.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'nullable|string|max:20',
            'date_added' => 'nullable|date',
        ]);

        EResource::create($request->all());

        return redirect()->route('e-resources.index')->with('success', 'E-Resource created successfully.');
    }

    public function edit(EResource $eResource)
    {
        return view('e-resources.edit', compact('eResource'));
    }

    public function update(Request $request, EResource $eResource)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'nullable|string|max:20',
            'date_added' => 'nullable|date',
        ]);

        $eResource->update($request->all());

        return redirect()->route('e-resources.index')->with('success', 'E-Resource updated successfully.');
    }

    public function destroy(EResource $eResource)
    {
        $eResource->delete();

        return redirect()->route('e-resources.index')->with('success', 'E-Resource deleted successfully.');
    }
}

