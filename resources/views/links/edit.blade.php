<div>
    <h1>Editar um link : {{ $link->id }}</h1>
    @if($mensagem = session()->get('mensagem'))
        <p>{{ $mensagem }}</p>
    @endif
    <form action="{{route('links.edit', $link)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input name="link" type="text" placeholder="link" value="{{ old('link', $link->link) }}">
            @error("link")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input name="name" type="text" placeholder="Nome" value="{{ old('name', $link->name) }}">
            @error("name")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <a href="{{ route('dashboard') }}">Cancelar</a>
        <button type="submit">Salvar</button>
    </form>
</div>
