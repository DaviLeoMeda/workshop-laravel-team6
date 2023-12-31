<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
    
</head>
<body>

    @yield('content')

    @foreach($pizzas as $elem)
        <div class='content'>
            <h1>{{ $elem['name'] }}</h1>
            <p>{{ $elem['description'] }}</p>
        </div>
    @endforeach 
 

</body>
</html>
