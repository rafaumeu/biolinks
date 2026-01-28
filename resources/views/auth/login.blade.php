<div>
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <input name="email" type="email" placeholder="Email" value="{{ old('email') }}">
        <input name="password" type="password" placeholder="Senha">
        <button>Login</button>
    </form>
</div>
