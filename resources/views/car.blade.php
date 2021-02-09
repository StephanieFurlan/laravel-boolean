<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    @foreach ($cars as $car)
        <h1>Model: {{ $car['model']}}</h1>
        <p>Licence plate {{ $car['LicencePlate']}}</p>
        <p>Brand: {{ $car['Brand']}}</p>
        <hr>
    @endforeach
</body>
</html>