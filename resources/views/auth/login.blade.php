<x-layout.app>

<x-container>
    <x-card>
        <x-slot name="title">
            Login
        </x-slot>
        <x-slot name="body">
        <x-form.form action="{{ route('login') }}" method="post" id="login-form">
            <x-form.input text="Email" type="text" name="email" placeholder="example@ex.com"></x-input>
            <x-form.input text="Senha" type="password" name="password" placeholder="********"></x-input>
        </x-form.form>
        </x-slot>
        
        <x-slot name="actions">
            <div class="flex flex-col items-center justify-center gap-2 w-full">
                <x-form.button form="login-form" type="submit">Entrar</x-form.button>
                <a href="{{ route('register') }}">
                    <p class="text-sm text-gray-500 underline">Ainda não possui uma conta? Cadastre-se aqui</p>
                </a>
            </div>
        </x-slot>
    </x-card>
</x-container>

</x-layout.app>