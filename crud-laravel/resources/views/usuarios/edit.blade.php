
<form action="{{ url('/usuarios/' . $usuario-> id) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('usuarios.form',['Modo'=>'editar'])

<input type="submit" value="Editar">
<br>
<a href="{{ url('usuarios')}}">Volver al Index</a>
<a href="{{ url('/') }}">Volver a Welcome</a>

</form>