<form action="{{url ('/usuarios')}}" method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <label for="id">{{ 'ID' }}</label>
    <input type="text" name="id" id="id" value="">
<br>
    <label for="nombre">{{ 'Nombre' }}</label>
    <input type="text" name="nombre" id="nombre" value="">
<br>
    <label for="apellido">{{ 'Apellido' }}</label>
    <input type="text" name="apellido" id="apellido" value="">
<br>
    <label for="telefono">{{ 'Teléfono' }}</label>
    <input type="text" name="telefono" id="telefono" value="">
<br>
    <input type="submit" value="Agregar">
</form>
