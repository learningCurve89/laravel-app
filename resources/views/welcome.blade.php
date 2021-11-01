<x-layout title="Welcome">
    <h1>Welcome</h1>
    <p>Please <a href="{{ route('login') }}">login</a></p>
</x-layout><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Keep it Local</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="author" content="Fran">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body class="antialiased">
    @include("navbar")
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-1 text-center">Keep it Local! :) </h1>
        </div>
    </div>
    <div class="container ">
        <p class="p-3 lead">Keep it local is your online LOCAL grocery shopper!</p>
        <div class="row p-3">
            <div class="col-sm p-3">
                <h3>Parters</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-sm p-3">
                <h3>Keep in Touch</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum</p>
                <button type="button" class="btn btn-primary">Contact</button>
            </div>
        </div>
</body>

</html>
<style>
    a {
    cursor: pointer;
}

li {
    cursor: pointer;
}
</style>