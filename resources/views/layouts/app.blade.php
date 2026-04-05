<!DOCTYPE html>
<html>
<head>
    <title>Cabillo Library</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .navbar { background: #333; color: white; padding: 10px; text-align: center; }
        .navbar a, .dashboard-btn { color: white; text-decoration: none; margin: 10px; font-weight: bold; padding: 10px 20px; display: inline-block; }
        .navbar a:hover, .dashboard-btn:hover { color: #ccc; }
        .navbar a { margin: 0 15px; }
        .dashboard-btn { background: #007bff; }
        .success { color: green; padding: 10px; text-align: center; }
        main { max-width: 800px; margin: 20px auto; padding: 20px; }
    </style>
</head>
<body>
<div class="navbar">
        <a href="/">Dashboard</a>
        <a href="/e-resources">E-Resources</a>
        <a href="/e-resources/create">Add</a>
    </div>
    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif
    <main>
        @yield('content')
    </main>
</body>
</html>

