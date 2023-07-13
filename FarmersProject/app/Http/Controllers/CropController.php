<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
class CropController extends Controller
{
public function create(){
    return view('Crop.create');
}

}