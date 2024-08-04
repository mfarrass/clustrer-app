@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Provinsi</h1>
        <form action="{{ route('provinsi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="year_2019">2019</label>
                <input type="number" name="year_2019" class="form-control" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2020">2020</label>
                <input type="number" name="year_2020" class="form-control" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2021">2021</label>
                <input type="number" name="year_2021" class="form-control" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2022">2022</label>
                <input type="number" name="year_2022" class="form-control" step="0.001" required>
            </div>
            <div class="form-group">
                <label for="year_2023">2023</label>
                <input type="number" name="year_2023" class="form-control" step="0.001" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Save</button>
        </form>
    </div>
@endsection
