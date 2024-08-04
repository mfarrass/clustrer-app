<?php

namespace App\Http\Controllers;

use App\Models\Centroid;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class CentroidController extends Controller
{
    public function index()
    {
        $centroids = Centroid::orderBy('year')->get();
        $provinsis = Provinsi::all();
        return view('centroid', compact('centroids', 'provinsis'));
    }
}
