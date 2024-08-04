@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between my-3">
        <h1>Cluster dan Centroids</h1>
    </div>

    <table class="table table-bordered table-striped" id="centroidTable">
        <thead>
            <tr>
                <th>Cluster</th>
                <th>Centroid 2019</th>
                <th>Centroid 2020</th>
                <th>Centroid 2021</th>
                <th>Centroid 2022</th>
                <th>Centroid 2023</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>600,000</td>
                <td>700,000</td>
                <td>750,000</td>
                <td>720,000</td>
                <td>730,000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1,000,000</td>
                <td>1,100,000</td>
                <td>1,150,000</td>
                <td>1,120,000</td>
                <td>1,140,000</td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-5">Data Provinsi</h2>

    <table class="table table-bordered table-striped my-2" id="provinsiDataTable">
        <thead>
            <tr>
                <th>Provinsi</th>
                <th>2019</th>
                <th>2020</th>
                <th>2021</th>
                <th>2022</th>
                <th>2023</th>
                <th>Cluster</th>
            </tr>
        </thead>
        <tbody>
            @foreach($provinsis as $provinsi)
            <tr>
                <td>{{ $provinsi->provinsi }}</td>
                <td>{{ number_format($provinsi->year_2019, 3) }}</td>
                <td>{{ number_format($provinsi->year_2020, 3) }}</td>
                <td>{{ number_format($provinsi->year_2021, 3) }}</td>
                <td>{{ number_format($provinsi->year_2022, 3) }}</td>
                <td>{{ number_format($provinsi->year_2023, 3) }}</td>
                <td>{{ $provinsi->cluster }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
