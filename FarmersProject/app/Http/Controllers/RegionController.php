<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    //
        
   
public function index()
{
    $regions = Region::with('crop')->get();
    return view('regions.index');
}

public function create()
{
    $crops = Crop::all();
    
   
return view('regions.create', compact('crops'));
}

public function store(Request $request)
{
    
   
$validatedData = $request->validate([
        'region_name' => 'required',
        'region_conditions' => 'required',
        'crop_id' => 'required|exists:crops,id',
    ]);

    Region::create($validatedData);

    

   
return redirect()->route('regions.index')->with('success', 'Region created successfully');
}
}
