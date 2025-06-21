<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba de Rutas Laravel</title>
</head>
<body>
    <h1> Pruebas de Rutas Laravel</h1>

    <h2>GET</h2>
    <a href="{{ route('saludo') }}">Saludo</a><br>

    <h2>POST</h2>
    <form action="{{ route('saludo.post') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Enviar</button>
    </form>

    <h2>PUT</h2>
    <form action="{{ route('saludo.put') }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Enviar</button>   
    </form>

    <h2>DELETE</h2> 
    <form action="{{ route('saludo.delete') }}" method="POST">
        @csrf
        @method('DELETE')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Enviar</button>
</form>


</body>
</html>