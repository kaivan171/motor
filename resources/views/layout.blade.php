<html>
<head>
    <meta charset="UTF-8">
    <title> Laravel </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"  crossorigin="anonymous">

</head>
<body>
<section class="container">
    @if(count($errors))
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
        </ul>
        @endforeach
    @endif
    @yield('content')
</section>
</body>

</html>