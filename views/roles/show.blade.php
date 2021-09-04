Usuarios según su Rol<br>
<table>
    
    <thead>
        <tr>
            <th>#</th>
            <th>Rol</th>
            <th>Usuario</th>
        </tr>
    </thead>

    <tbody>
        @foreach($rol as $rols)
        <tr>
            <td>{{ $rols->id }}</td>
            <td>{{ $rols->rol }}</td>
            <td>{{ $rols->name }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
<br>
<a href="{{ url('rols/') }}">Volver</a>