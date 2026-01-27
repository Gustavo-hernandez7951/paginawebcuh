<!DOCTYPE html>
<html>
<head>
    <h1>Mensaje recibido desde la Pagina CUH</h1>
</head>
<body>
    <p><strong>Recibiste un mensaje de: </strong> {{ $msg['name']}} </p>
    <p><strong>Relacionado a: </strong> {{ $msg['subject']}} </p>
    <p><strong>Con el siguiente Mensaje: </strong>{{ $msg['message']}}</p>
    <p><strong>Deja como medio de contacto el Correo: </strong>{{ $msg['email']}}</p>
</body>
</html>