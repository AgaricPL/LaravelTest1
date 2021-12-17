<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Address</h1>
        <ul>
            <li> Postal: {{ $address['postalCode'] }} </li>
            <li> Street: {{ $address['street'] }} </li>
            <li> House: {{ $address['houseNumber'] }} </li>
            <li> Flat: {{ $address['flatNumber'] }} </li>
        </ul>
        <div> Postal: {{ $address['postalCode'] }} </div>
    </div>
</body>
</html>
