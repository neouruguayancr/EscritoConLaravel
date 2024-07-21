@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{ url('usuarios/create')}}">Agregar Usuario</a>
<a href="{{ url('/') }}">Volver a Welcome</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->apellido}}</td>
            <td>{{$usuario->telefono}}</td>
            <td> <a href="{{url('/usuarios/'. $usuario->id.'/edit')}}">
                Editar</a>
                
                
                 <form action="{{ url('/usuarios/'.$usuario->id)}}" method="post">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>