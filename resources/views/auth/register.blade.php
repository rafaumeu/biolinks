<div>
    <h1>Register</h1>
    @if($mensagem = session()->get('mensagem'))
        <p>{{ $mensagem }}</p>
    @endif
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div>
            <input name="name" type="text" placeholder="Nome" value="{{ old('name') }}">
            @error("name")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="email" type="email" placeholder="Email" value="{{ old('email') }}">
            @error("email")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="email_confirmation" type="email" placeholder="Confirmar Email">
            @error("email_confirmation")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="password" type="password" placeholder="Senha">
            @error("password")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button>Login</button>
    </form>
</div>
