<!DOCTYPE html>
<html>

    <head>
        <script src="/lib/w3.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>
        <title>Prameter page</title>
    </head>

    <body>
        Prameter page
        @foreach ($data as $item)
            <div>{{ $item }}</div>
        @endforeach

        <div> {{ $name }} </div>

    </body>

</html>
