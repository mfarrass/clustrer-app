<!-- resources/views/provinsi/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Provinsi Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>Provinsi</th>
                <td>{{ $provinsi->provinsi }}</td>
            </tr>
            <tr>
                <th>2019</th>
                <td>{{ $provinsi->year_2019 }}</td>
            </tr>
            <tr>
                <th>2020</th>
                <td>{{ $provinsi->year_2020 }}</td>
            </tr>
            <tr>
                <th>2021</th>
                <td>{{ $provinsi->year_2021 }}</td>
            </tr>
            <tr>
                <th>2022</th>
                <td>{{ $provinsi->year_2022 }}</td>
            </tr>
            <tr>
                <th>2023</th>
                <td>{{ $provinsi->year_2023 }}</td>
            </tr>
            <tr>
                <th>Cluster</th>
                <td>{{ $provinsi->cluster }}</td>
            </tr>
        </table>
        <a href="{{ route('provinsi.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
