<!DOCTYPE html>
<html>
<head>
    <title>Arti Kata</title>
</head>
<body>
    <h1>Arti dari kata "{{ $word }}"</h1>

    @foreach($meaning as $entry)
        <p>{{ $entry['definition'] }}</p>
    @endforeach
</body>
</html>
