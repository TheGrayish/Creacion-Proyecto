<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
</head>
<body>
    <h3>
      {{$tipo}}
    </h3>
    <h1> Formularo de contacto<h1>
        <form action="validar-contacto" method="post">
            @csrf
            <label for="correo">Correo</label><br>
            <input type="email" name="correo" 
            @if($tipo == 'alumno')
                value="@alumnos.udg.mx"
            @else
                value="@gmail.com"

            @endif
            ><br>

            <label for="comentario">Comentario</label><br>
            <textarea name="comentario" id="" cols="30" rows="10">

            </textarea><br>
            <input type="submit" value="Enviar">
</body>
</html>