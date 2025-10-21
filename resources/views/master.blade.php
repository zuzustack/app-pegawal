<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Pegawai')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="row" style="min-height: 90vh">
        <header class="col-2 px-4 py-3 bg-light">
            <h5>@yield('page-title', 'App Pegawai')</h5>
            <nav>
                <div class="list-group list-group-flush">
                    <a class="list-group-item" href="{{ url('/employees') }}">Employee</a>
                    <a class="list-group-item" href="{{ url('/positions') }}">Position</a>
                    <a class="list-group-item" href="{{ url('/departments') }}">Department</a>
                    <a class="list-group-item" href="{{ url('/attendances') }}">Attendance</a>
                </div>
            </nav>
        </header>
        <main class="mx-4 col-9 mt-4">
            @yield('content')
        </main>
    </div>
    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
