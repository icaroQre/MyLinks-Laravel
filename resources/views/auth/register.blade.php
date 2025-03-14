<x-layout.app>
    <x-container>
        <x-card>
        <x-slot name="title">
            Cadastrar
        </x-slot>

        <x-slot name="body">
            <x-form.form action="{{ route('register') }}" method="post" id="register-form">
                <x-form.input text="Nome" type="text" name="name" placeholder="John Doe" value="{{ old('name') }}"></x-form.input>
                <x-form.input text="Email" type="text" name="email" placeholder="john.doe@example.com" value="{{ old('email') }}"></x-form.input>
                <x-form.input text="Confirmar email" type="text" name="email_confirmation" placeholder="john.doe@example.com" value="{{ old('email') }}"></x-form.input>
                <x-form.input text="Senha" type="password" name="password" placeholder="********" value="{{ old('password') }}"></x-form.input>
            </x-form.form>
        </x-slot>
        
        <x-slot name="actions">
            <a class="w-full" href="{{route('login')}}">
                <x-form.button-cancel type="submit">Cancelar</x-form.button-cancel>
            </a>
            <x-form.button form="register-form" type="submit">Criar</x-form.button>
        </x-slot>
        </x-card>    
    </x-container>
</x-layout.app>