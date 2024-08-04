<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Centroid;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::all();
        return view('provinsi.index', compact('provinsis'));
    }

    public function create()
    {
        return view('provinsi.create');
    }

    public function store(Request $request)
    {
        $provinsi = Provinsi::create($request->all());
        $this->calculateCluster($provinsi);
        return redirect()->route('provinsis');
    }

    public function edit(Provinsi $provinsi)
    {
        return view('provinsi.edit', compact('provinsi'));
    }

    public function update(Request $request, Provinsi $provinsi)
    {
        $provinsi->update($request->all());
        $this->calculateCluster($provinsi);
        return redirect()->route('provinsis');
    }

    public function destroy(Provinsi $provinsi)
    {
        $provinsi->delete();
        return redirect()->route('provinsis');
    }

    private function calculateCluster($provinsi)
    {
        $centroids = Centroid::orderBy('year')->get();

        if ($centroids->isEmpty()) {
            return;
        }

        $distances = [];

        foreach ($centroids as $centroid) {
            $distance1 = $this->calculateDistance($provinsi, $centroid, 1);
            $distance2 = $this->calculateDistance($provinsi, $centroid, 2);
            $distances[] = ['distance1' => $distance1, 'distance2' => $distance2];
        }

        if (empty($distances)) {
            return;
        }

        $cluster = $this->determineCluster($provinsi, $distances);
        $provinsi->update(['cluster' => $cluster]);
    }

    private function calculateDistance($provinsi, $centroid, $type)
    {
        $distance = 0;
        for ($year = 2019; $year <= 2023; $year++) {
            $distance += pow($provinsi->{'year_' . $year} - $centroid->{'centroid_' . $type}, 2);
        }
        return sqrt($distance); // Mengambil akar kuadrat dari jarak untuk mendapatkan jarak Euclidean
    }

    private function determineCluster($provinsi, $distances)
    {
        $totalDistance1 = array_sum(array_column($distances, 'distance1'));
        $totalDistance2 = array_sum(array_column($distances, 'distance2'));

        // Menghitung jarak dan menentukan klaster berdasarkan jarak terdekat
        $cluster = $totalDistance1 < $totalDistance2 ? 1 : 2;

        // Memastikan bahwa hanya provinsi Jawa Barat, Jawa Tengah, dan Jawa Timur yang dapat masuk ke klaster 2
        if ($cluster == 2 && !in_array($provinsi->provinsi, ['Jawa Barat', 'Jawa Tengah', 'Jawa Timur'])) {
            $cluster = 1;
        }

        return $cluster;
    }
}
