<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Provinsi;
use App\Models\Centroid;

class CalculateClusters extends Command
{
    protected $signature = 'calculate:clusters';
    protected $description = 'Calculate clusters using predefined centroids';

    public function handle()
    {
        $provinsis = Provinsi::all();
        $centroids = Centroid::orderBy('year')->get();

        if ($centroids->isEmpty()) {
            $this->error('No centroids found.');
            return;
        }

        if ($provinsis->isEmpty()) {
            $this->error('No provinces found.');
            return;
        }

        foreach ($provinsis as $provinsi) {
            $distances = [];

            foreach ($centroids as $centroid) {
                $distance1 = $this->calculateDistance($provinsi, $centroid, 1);
                $distance2 = $this->calculateDistance($provinsi, $centroid, 2);
                $distances[] = ['distance1' => $distance1, 'distance2' => $distance2];
            }

            if (empty($distances)) {
                $this->error('No distances calculated for province: ' . $provinsi->provinsi);
                continue;
            }

            $cluster = $this->determineCluster($provinsi, $distances);
            $provinsi->update(['cluster' => $cluster]);
        }

        $this->info('Clusters calculated successfully.');
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
