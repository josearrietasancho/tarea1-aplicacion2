<!--
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
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 40px;
            max-width: 480px;
            width: 100%;
        }

        h1 {
            font-size: 1.4rem;
            color: #2d2d2d;
            margin-bottom: 24px;
        }

        .field {
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.95rem;
            color: #444;
        }

        .field strong {
            color: #5a67d8;
        }

        .btn-back {
            display: inline-block;
            margin-top: 24px;
            padding: 10px 20px;
            background: #5a67d8;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 0.95rem;
            transition: background 0.2s;
        }

        .btn-back:hover {
            background: #4c56c0;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Información del Contacto</h1>

        <div class="field"><strong>Nombre:</strong> {{ session('nombre') }}</div>
        <div class="field"><strong>Teléfono:</strong> {{ session('telefono') }}</div>
        <div class="field"><strong>Dirección:</strong> {{ session('direccion') }}</div>
        <div class="field"><strong>Email:</strong> {{ session('email') }}</div>
        <div class="field"><strong>Estado Civil:</strong> {{ session('estadoCivil') }}</div>

        <a href="/" class="btn-back">Volver al formulario</a>
    </div>
</body>

</html>