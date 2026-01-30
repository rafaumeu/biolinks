<div>
    <h1>Dashboard</h1>
    @if($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif
    <a href="{{ route('links.create') }}">Criar novo link</a>
    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{route('links.edit', $link->id)}}">{{ $link->name }}</a>
                <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este link?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
