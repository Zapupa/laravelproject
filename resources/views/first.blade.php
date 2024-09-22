<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>flby</h1>
    {{ $c }}<br/>
    {{ $dev }}

    @for ($i = 1800; $i < 1850; $i++)
        <p> {{ $i }} 
            @if($i % 4 == 0 && $i % 100 != 0 || $i % 400 == 0)
                 <span>leap</span>
            @endif
        </p>
    @endfor
</body>
</html>