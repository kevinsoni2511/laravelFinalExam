<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sample;

class SampleController extends Controller
{
    
    public function index()
    {
        $abc = sample::all();
        return view('Stud.index',compact('abc'));
    }

    
    public function create()
    {
        return view('Stud.create');
    }

    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'category'=>'required',
            'price' => 'required',
        ]);

        sample::create($validateData);
        return redirect()->route('Stud.index')->with('success');
    }
    public function show($id)
    {
        $abc = sample::findOrFail($id);
        return view('Stud.show',compact('abc'));      
    }
    public function edit($id)
    {
        $abc = sample::findOrFail($id);
        return view('Stud.edit',compact('abc'));
    }
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'category'=>'required',
            'price' => 'required',
        ]);

        sample::whereId($id)->update($validateData);
        return redirect()->route('Stud.index')->with('success');
    }
    public function destroy($id)
    {
        $abc = sample::findOrFail($id);
        $abc->delete();
        return redirect()->route('Stud.index')->with('success');
        
    }
}
