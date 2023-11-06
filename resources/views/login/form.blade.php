@if($errors->any())
    @foreach($errors->all() as $erro)
        {{ $erro }}<br>
    @endforeach
@endif
<form action="{{ route('login.auth')}}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="E-mail"><br>
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Entrar</button>
</form>
