<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo de Contacto</title>
</head>
<body>
    <h1>Correo Electrónico</h1>
    <p><strong>Nombre: </strong>{{ $contacto['name'] }} {{ $contacto['lname'] }}</p>
    <p><strong>Correo: </strong>{{ $contacto['email'] }}</p>
    <p><strong>Asunto: </strong>{{ $contacto['subject'] }}</p>
    <p><strong>Cuerpo: </strong>{{ $contacto['body'] }}</p>
</body>
</html>