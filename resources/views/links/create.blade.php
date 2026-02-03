<x-layout.app>
    <div>
        <h1>Criar um Link</h1>
        @if ($mensagem = session()->get('mensagem'))
            <p>{{ $mensagem }}</p>
        @endif
        <form action="{{ route('links.store') }}" method="POST">
            @csrf
            <div>
                <input name="link" type="text" placeholder="link" value="{{ old('link') }}">
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <input name="name" type="text" placeholder="Nome" value="{{ old('name') }}">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <button>Salvar</button>
        </form>
    </div>
</x-layout.app>
