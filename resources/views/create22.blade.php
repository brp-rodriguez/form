<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{ route('formulario.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                </div>
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control" name="correo" id="correo">
            </div>
            <div class="form-group">
                <label>País</label>
                <input type="text" class="form-control" name="pais" id="pais">
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono">
            </div>
            <div class="form-group">
                <label>Empresa</label>
                <input type="text" class="form-control" name="empresa" id="empresa">
            </div>
            
            <div class="form-group">
                <label>Cargo</label>
                <input type="text" class="form-control" name="cargo" id="cargo">
            </div>
            
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>
</html>