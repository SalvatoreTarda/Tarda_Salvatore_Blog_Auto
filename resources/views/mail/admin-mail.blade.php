<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>L'utente {{ $user['name'] }} ci ha contattato</h1>
    <h5>il suo messaggio è partito dalla mail:{{ $user['email'] }} dicendo:</h5>
    <p>{{ $user['body'] }}</p>
    
</body>
</html>