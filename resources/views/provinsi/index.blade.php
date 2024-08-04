@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between my-3 align-items-center">
        <h1><i class="fas fa-table"></i> Data Provinsi</h1>
        <a href="{{ route('provinsi.create') }}" class="btn btn-dark mb-3"><i class="fas fa-plus"></i> Add Provinsi</a>
    </div>

    <!-- Table with DataTables -->
    <table class="table table-bordered table-striped" id="provinsiTable">
        <thead>
            <tr>
                <th>Provinsi</th>
                <th>2019</th>
                <th>2020</th>
                <th>2021</th>
                <th>2022</th>
                <th>2023</th>
                <th>Cluster</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($provinsis as $provinsi)
                <tr>
                    <td>{{ $provinsi->provinsi }}</td>
                    <td>{{ number_format($provinsi->year_2019, 3) }}</td>
                    <td>{{ number_format($provinsi->year_2020, 3) }}</td>
                    <td>{{ number_format($provinsi->year_2021, 3) }}</td>
                    <td>{{ number_format($provinsi->year_2022, 3) }}</td>
                    <td>{{ number_format($provinsi->year_2023, 3) }}</td>
                    <td>{{ $provinsi->cluster }}</td>
                    <td>
                        <a href="{{ route('provinsi.edit', $provinsi->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('provinsi.destroy', $provinsi->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- Popper.js for tooltips -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- FontAwesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#provinsiTable').DataTable({
                "responsive": true,
                "paging": true,
                "searching": true,
                "ordering": true
            });

            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
