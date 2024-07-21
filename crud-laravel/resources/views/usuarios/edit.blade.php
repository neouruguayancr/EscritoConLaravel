
<form action="{{ url('/usuarios/' . $usuario-> id) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

    <label for="id">{{ 'ID' }}</label>
    <input type="text" name="id" id="id" value="{{ $usuario->id }}">
    <br>
    <label for="nombre">{{ 'Nombre' }}</label>
    <input type="text" name="nombre" id="nombre" value="{{ $usuario->nombre }}">
    <br>
    <label for="apellido">{{ 'Apellido' }}</label>
    <input type="text" name="apellido" id="apellido" value="{{ $usuario->apellido }}">
    <br>
    <label for="telefono">{{ 'Teléfono' }}</label>
    <input type="text" name="telefono" id="telefono" value="{{ $usuario->telefono }}">
    <br>
<input type="submit" value="Editar">
<br>
<a href="{{ url('usuarios')}}">Volver al Index</a>
<a href="{{ url('/') }}">Volver a Welcome</a>

</form>