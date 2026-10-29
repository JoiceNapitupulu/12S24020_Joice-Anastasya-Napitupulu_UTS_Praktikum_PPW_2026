<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Library System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1 class="brand">Online Library</h1>
            <nav class="main-nav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('borrow') }}">Peminjaman</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="container footer">
        &copy; Kelompok 1 Pabwe
    </footer>

    <script src="{{ asset('js/localstorage.js') }}"></script>
</body>
</html>
