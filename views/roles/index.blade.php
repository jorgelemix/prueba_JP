Lista de Roles<br>
<a href="{{ url('rols/create') }}">Registrar nuevo Rol</a>
<table>
    
    <thead>
        <tr>
            <th>#</th>
            <th>Rol</th>
        </tr>
    </thead>

    <tbody>
        @foreach($rol as $rols)
        <tr>
            <td>{{ $rols->id }}</td>
            <td>{{ $rols->rol }}</td>
            <td>
                <a href="{{ url('/rols/'.$rols->id.'/edit') }}">Editar</a>
                <form action="{{ url('/rols/'.$rols->id) }}" method="post">
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
<a href="{{ url('rols/show') }}">Roles Asignados</a><br>
<a href="{{ url('home/') }}">Volver</a>