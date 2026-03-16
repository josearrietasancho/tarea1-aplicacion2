<!DOCTYPE html>
<html>

<head>
    <title>Resultado</title>
</head>

<body>
    <h2>Datos Recibidos</h2>
    <p>Nombre: {{request('nombre')}}</p>
    <p>Teléfono: {{request('telefono')}}</p>
    <p>Dirección: {{request('direccion')}}</p>
    <p>Email: {{request('email')}}</p>
    <p>Estado Civil: {{request('estado')}}</p>
</body>

</html>