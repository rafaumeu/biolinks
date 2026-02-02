<div>
    <h1>Profile</h1>
    @if(session()->has('message'))
        <div>{{session('message')}}</div>
    @endif
    <form action="{{route('profile')}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input name="name" type="text" placeholder="Nome" value="{{ old('name', $user->name) }}">
            @error("name")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <textarea name="description" placeholder="Breve resumo">{{ old('description', $user->description) }}</textarea>
            @error("description")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <span>https://biolinks.com.br/</span>
            <input name="handler" type="text" placeholder="@handle" value="{{ old('handler', $user->handler) }}">
            @error("handler")
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <a href="{{route('dashboard')}}">Cancelar</a>
        <button>Atualizar</button>
    </form>
</div>
