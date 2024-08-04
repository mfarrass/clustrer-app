<?php

namespace Database\Seeders;

use App\Models\Centroid;
use Illuminate\Database\Seeder;

class CentroidSeeding extends Seeder
{
    public function run()
    {
        $centroidValues = [
            ['year' => '2019', 'centroid_1' => 600000, 'centroid_2' => 1000000],
            ['year' => '2020', 'centroid_1' => 700000, 'centroid_2' => 1100000],
            ['year' => '2021', 'centroid_1' => 750000, 'centroid_2' => 1150000],
            ['year' => '2022', 'centroid_1' => 720000, 'centroid_2' => 1120000],
            ['year' => '2023', 'centroid_1' => 730000, 'centroid_2' => 1140000],
        ];

        foreach ($centroidValues as $values) {
            Centroid::updateOrCreate(['year' => $values['year']], [
                'centroid_1' => $values['centroid_1'],
                'centroid_2' => $values['centroid_2'],
            ]);
        }
    }
}
