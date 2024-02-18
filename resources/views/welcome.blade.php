<!DOCTYPE html>
<html>
<head>
    <title>Dictionary App</title>
</head>
<body>
    <h1>Dictionary App</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form method="post" action="{{ url('/check-meaning') }}">
        @csrf
        <label for="word">Masukkan kata:</label>
        <input type="text" name="word" required>
        <button type="submit">Cari</button>
    </form>

</body>
</html>
