Editar Usuarios<br>
<form action="{{ url('/users/'.$user->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <label for="name">Nombre</label><br>
    <input type="text" name="name" id="name" value="{{ $user->name }}"><br>
            
    <label for="email">Email</label>
    <input type="email" name="email" id="name" value="{{ $user->email }}"><br>
    <br>
    <input type="submit" value="Guardar">
    <br>
    <a href="{{ url('users/') }}">Volver</a>
</form>