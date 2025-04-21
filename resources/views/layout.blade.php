<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Exam</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/Home') }}">Home</a>
            <a href="{{ url('/menu') }}">MenuDetails</a>
            <a href="{{ route('Stud.index') }}">Dashboard</a>
        </nav>
    </header>
    <main>
    @yield('content')
    </main>
    <br><br>
    <footer style="justify-content: center">
        &copy; kevin Soni
    </footer>
</body>

</html>