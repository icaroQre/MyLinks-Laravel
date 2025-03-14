<x-layout.app>
<x-container>
    <x-card>

        <x-slot name="title">
            Criar novo link
        </x-slot>
        <x-slot name="body">
            <x-form.form action="{{ route('links.create') }}" method="post" id="create-link-form">
                <x-form.input text="Nome" type="text" name="name" placeholder="Ex: MeusVídeos"></x-form.input>
                <x-form.input text="URL" type="text" name="link" placeholder="www.example.com"></x-form.input>
            </x-form.form>
            <x-slot name="actions">
                <a class="w-full" href="{{ route('dashboard') }}">
                    <x-form.button-cancel> Cancelar </x-form.button-cancel>
                </a> 
                <x-form.button form="create-link-form" type="submit">Salvar</x-form.button>
            </x-slot>
        </x-slot>
    </x-card>
</x-container>
</x-layout.app>