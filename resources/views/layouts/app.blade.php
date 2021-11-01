<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="author" content="Fran">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>
        Keep it Local
    </title>

</head>

<body>
    @include("navbar")
    <h1>
        Keep it Local!
    </h1>
    @if(session('message'))
    <p><b>{{session('message')}}</b></p>
    @endif
    @if($errors->any())
    <div>
        Errors:
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div>
        @yield('content')
    </div>
    <div>
        <button onclick="goBack()" type="button" class="btn btn-outline-dark">Back</button>
    </div>
</body>

</html>
<script>
    function goBack() {
        window.history.back();
    }
</script>