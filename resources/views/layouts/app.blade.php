<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cluster App</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #272727;
            color: #ddd;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            color: #ddd;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: #000;
        }
        .main-content {
            margin-left: 250px;
            padding-bottom: 60px; /* Space for the footer */
        }
        .footer {
            position: fixed;
            font-weight: bold;
            bottom: 0;
            left: 250px;
            width: calc(100% - 250px);
            color: #272727;
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Cluster App</h4>
        <a href="{{ route('provinsis') }}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ route('provinsi.centroids') }}"><i class="fas fa-chart-pie"></i> Cluster dan Centroids</a>
    </div>
    <div class="main-content">
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/') }}"></a>
        </nav> --}}
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024, Indah Tri Nur Azizah.
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table').DataTable();
        });
    </script>
</body>
</html>
