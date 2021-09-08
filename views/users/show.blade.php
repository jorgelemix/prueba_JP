Lista de Usuarios<br>
<a href="{{ route('register') }}">Registrar nuevo Usuario</a>
<table>
    
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
    </thead>

    <tbody>
        @if($users)
        <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $rols->rol }}</td>
            <td>
                <a href="{{ url('/users/'.$users->id.'/edit') }}">Editar</a>
                <form action="{{ url('/users/'.$users->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Desea Borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endif
    </tbody>

</table>
<br>
<a href="{{ url('home/') }}">Volver</a>