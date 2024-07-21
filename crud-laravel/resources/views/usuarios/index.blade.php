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
            <td> Editar | <form action="{{ url('/usuarios/'.$usuario->id)}}" method="post">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>