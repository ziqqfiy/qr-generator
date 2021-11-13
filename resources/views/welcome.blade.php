<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qr-code</title>
</head>
<body>
    <h4>Qr Code generator</h4>
    {!! QrCode::size(250)->generate('https://www.youtube.com/watch?v=dQw4w9WgXcQ') !!}
</body>
</html>