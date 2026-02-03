<x-layout.app>
    <x-container>
        <x-card title="Registro">

            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" type="text" placeholder="Nome" value="{{ old('name') }}" />
                <x-input name="email" type="email" placeholder="Email" value="{{ old('email') }}" />
                <x-input name="email_confirmation" type="email" placeholder="Confirmar Email" />
                <x-input name="password" type="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-button type="submit" form="register-form">Criar Conta</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
