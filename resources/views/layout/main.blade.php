<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', $aplicationName)</title>
</head>
<style>
    td {
        padding-right: 15px;
    }
</style>
<body>
    <h1>{{ $aplicationName }}</h1>

    <div class="sidebar">
        @section('sidebar')
            <ul>
                <li><a href="#">...</a></li>
            </ul>
        @show
    </div>


    <div class="container">
        @yield('container')
    </div>
</body>
</html>
