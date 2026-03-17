<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>

    <style>
        body {
            background: #f5f6fa;
            margin: 0;
            padding: 0;
        }

        .form-wrapper {
            max-width: 480px;
            margin: 60px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 40px;
            font-family: sans-serif;
        }

        .form-wrapper h2 {
            margin-bottom: 24px;
            font-size: 1.4rem;
            color: #2d2d2d;
        }

        .data-row {
            margin-bottom: 14px;
            padding: 10px 12px;
            background: #f8f9fc;
            border-radius: 6px;
            border: 1px solid #eee;
        }

        .data-label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #666;
            display: block;
        }

        .data-value {
            font-size: 0.95rem;
            color: #2d2d2d;
            margin-top: 3px;
        }

        .btn-back {
            width: 100%;
            padding: 11px;
            background: #5a67d8;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 20px;
            text-align: center;
            display: inline-block;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-back:hover {
            background: #4c56c0;
        }
    </style>
</head>

<body>

<div class="form-wrapper">
    <h2>Datos Recibidos</h2>

    <div class="data-row">
        <span class="data-label">Nombre</span>
        <span class="data-value">{{ session('nombre') }}</span>
    </div>

    <div class="data-row">
        <span class="data-label">Teléfono</span>
        <span class="data-value">{{ session('telefono') }}</span>
    </div>

    <div class="data-row">
        <span class="data-label">Dirección</span>
        <span class="data-value">{{ session('direccion') }}</span>
    </div>

    <div class="data-row">
        <span class="data-label">Email</span>
        <span class="data-value">{{ session('email') }}</span>
    </div>

    <div class="data-row">
        <span class="data-label">Estado Civil</span>
        <span class="data-value">{{ session('estadoCivil') }}</span>
    </div>

    <a href="/" class="btn-back">Volver al formulario</a>
</div>

</body>
</html>