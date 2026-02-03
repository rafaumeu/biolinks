<x-layout.app>
    <x-container>
        <div class="card bg-base-100 w-96 shadow-xl">
            @if ($mensagem = session()->get('mensagem'))
                <span class="text-small text-error">{{ $mensagem }}</span>
            @endif
            <div class="card-body">
                <h1 class="card-title">Login</h1>
                <form id="login-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <input class="input input-bordered" name="email" type="email" placeholder="Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-small text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <input class="input input-bordered" name="password" type="password" placeholder="Senha">
                        @error('password')
                            <div class="text-small text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="card-actions">
                        <button class="btn btn-primary" type="submit" form="login-form">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </x-container>
</x-layout.app>
