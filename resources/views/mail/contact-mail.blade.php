<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Grazie {{ $user['name'] }} per averci contattato</h1>
    <h2>la tua auto sarà consegnata non appena sarà disponibile</h2>
    <p>il tuo messaggio era</p>
    <p>{{ $user['body'] }}</p>
    
</body>
</html>