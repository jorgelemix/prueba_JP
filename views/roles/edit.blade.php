Editar Roles
<form action="{{ url('/rols/'.$rols->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <label for="rol">Rol</label><br>
    <input type="text" name="rol" id="rol" value="{{ $rols->name }}"><br>
    <input type="submit" value="Guardar">
    <br>
    <a href="{{ url('rols/') }}">Volver</a>
</form>