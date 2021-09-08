Editar Usuarios<br>
<form action="{{ url('/users/'.$users->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <label for="name">Nombre</label><br>
    <input type="text" name="name" id="name" value="{{ $users->name }}"><br>
            
    <label for="email">Email</label>
    <input type="email" name="email" id="name" value="{{ $users->email }}"><br>
    <br>
    <input type="submit" value="Guardar">
    <br>
    <a href="{{ url('users/') }}">Volver</a>
</form>