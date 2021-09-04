Lista de Usuarios<br>
<a href="{{ url('auth/register') }}">Registrar nuevo Usuario</a>
<table>
    
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <a href="{{ url('/users/'.$usuario->id.'/edit') }}">Editar</a>
                <form action="{{ url('/users/'.$usuario->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Desea Borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<br>
<a href="{{ url('home/') }}">Volver</a>