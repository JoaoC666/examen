<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>publicidad</title>
</head>
<body>
    <div>
    <form action="/publicidad/store" enctype="multipart/form-data" method="post">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ( $errors->all() as $err)
                <li>
                    {{ $err }}
                </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@csrf
<div>
    <input type="text" name="titulo" id="titulo" placeholder="titulo">
    <span class ="text-danger">{{ $errors->first('titulo') }}</span>
</div>

<div>
    <input type="text" name="anuncio" id="anuncio" placeholder="Anuncio">    
</div>

<div>
    <input type="number" name="celular" id="celular" placeholder="celular">
    <span class ="text-danger">{{ $errors->first('celular') }}</span>

</div>

<div>
    <input type="text" name="autor" id="autor" placeholder="autor">
    <span class ="text-danger">{{ $errors->first('autor') }}</span>    
</div>

<div>
    <input type="date" name="fecha" id="fecha" placeholder="Fechainicio">
    <span class ="text-danger">{{ $errors->first('fecha') }}</span>    
</div>

<div>
    <input type="date" name="fechalmit" id="fechalmit" placeholder="Fechaculminacion">
    <span class ="text-danger">{{ $errors->first('fechalmit') }}</span> 
</div>
<input type="submit" value="enviar">
</form>


</body>
</html>