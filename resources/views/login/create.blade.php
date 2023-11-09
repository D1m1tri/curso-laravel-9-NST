@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    Nome: <input type="text" name="first_name"><br>
    Sobrenome: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Senha: <input type="password" name="password"><br>

    <button type="submit">Cadastrar</button>
</form>
