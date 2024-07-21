    
    {{ $Modo=='crear' ? 'Agregar usuario':'Modificar usuario'}}
<br>
    <label for="id">{{ 'ID' }}</label>
    <input type="text" name="id" id="id" value="{{isset($usuario->id)?$usuario->id:''}}">
    <br>
    <label for="nombre">{{ 'Nombre' }}</label>
    <input type="text" name="nombre" id="nombre" value="{{isset($usuario->nombre)?$usuario->nombre:''}}">
    <br>
    <label for="apellido">{{ 'Apellido' }}</label>
    <input type="text" name="apellido" id="apellido" value="{{isset($usuario->apellido)?$usuario->apellido:''}}">
    <br>
    <label for="telefono">{{ 'Teléfono' }}</label>
    <input type="text" name="telefono" id="telefono" value="{{isset($usuario->telefono)?$usuario->telefono:''}}">
    <br>
  
   