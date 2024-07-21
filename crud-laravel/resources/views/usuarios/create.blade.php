<form action="{{url ('/usuarios')}}" method="post" enctype="multipart/form-data">

    {{csrf_field()}}

@include('usuarios.form',['Modo'=>'crear'])
<input type="submit" value="Agregar">
<a href="{{ url('usuarios') }}">Volver al Index</a>
<a href="{{ url('/') }}">Volver a Welcome</a>
</form>
