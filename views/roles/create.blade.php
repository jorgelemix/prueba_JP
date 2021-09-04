<form action="{{ url('/rols') }}" method="post">
    @csrf
    <label for="rol">Rol</label><br>
    <input type="text" name="rol" id="rol"><br>
                
    <label for="user_id">Usuario: </label>
    <select name="user_id" id="user_id">
        <option value="" selected>Seleccione...</option>
        @foreach($users as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
        @endforeach
    </select>

    <br>
    <input type="submit" value="Guardar">
    <br>
    <a href="{{ url('rols/') }}">Volver</a>
</form>