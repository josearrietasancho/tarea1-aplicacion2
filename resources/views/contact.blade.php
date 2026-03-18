<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>aplicacion-2</title>
    <style>
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
    .form-group {
        margin-bottom: 18px;
        display: flex;
        flex-direction: column;
    }
    .form-group label {
        font-size: 0.85rem;
        font-weight: 600;
        color: #555;
        margin-bottom: 6px;
    }
    .form-group input,
    .form-group select {
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 0.95rem;
        outline: none;
        transition: border 0.2s;
    }
    .form-group input:focus,
    .form-group select:focus {
        border-color: #5a67d8;
    }
    .form-group .error {
        color: #e53e3e;
        font-size: 0.8rem;
        margin-top: 4px;
    }
    .btn-submit {
        width: 100%;
        padding: 11px;
        background: #5a67d8;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.2s;
        margin-top: 8px;
    }
    .btn-submit:hover {
        background: #4c56c0;
    }
</style>
</head>
<body>

<h1>Formulario de Contacto</h1>

<div class="form-wrapper">
    <h2>Formulario de Contacto</h2>

    <form method="POST" action="/submit">
        @csrf

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            @error('nombre') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="telefono" value="{{ old('telefono') }}">
            @error('telefono') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Dirección</label>
            <input type="text" name="direccion" value="{{ old('direccion') }}">
            @error('direccion') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Estado Civil</label>
            <select name="estadoCivil">
                <option value="">-- Seleccione --</option>
                <option value="Soltero/a">Soltero/a</option>
                <option value="Casado/a">Casado/a</option>
                <option value="Divorciado/a">Divorciado/a</option>
                <option value="Viudo/a">Viudo/a</option>
            </select>
            @error('estadoCivil') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button class="btn-submit" type="submit">Enviar</button>
    </form>
</div>

</body>
</html>