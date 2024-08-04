<!-- resources/views/provinsi/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Provinsi</h1>
        <form action="{{ route('provinsi.update', $provinsi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" value="{{ $provinsi->provinsi }}" required>
            </div>
            <div class="form-group">
                <label for="year_2019">2019</label>
                <input type="number" name="year_2019" class="form-control" value="{{ $provinsi->year_2019 }}" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2020">2020</label>
                <input type="number" name="year_2020" class="form-control" value="{{ $provinsi->year_2020 }}" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2021">2021</label>
                <input type="number" name="year_2021" class="form-control" value="{{ $provinsi->year_2021 }}" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2022">2022</label>
                <input type="number" name="year_2022" class="form-control" value="{{ $provinsi->year_2022 }}" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2023">2023</label>
                <input type="number" name="year_2023" class="form-control" value="{{ $provinsi->year_2023 }}" step="0.001" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Update</button>
        </form>
    </div>
@endsection
