<x-layout.app>
    <x-container>
        <x-card>
            <x-slot name="title">
                Editar Link
            </x-slot>

            <x-slot name="body">
                <x-form.form action="{{ route('links.edit', $link) }}" method="post" id="edit-link-form">
                @method('put')
                    <x-form.input text="Nome" type="text" name="name" placeholder="MeusVídeos" value="{{ old('name', $link->name) }}"></x-form.input>
                    <x-form.input text="URL" type="text" name="link" placeholder="www.example.com" value="{{ old('link', $link->link) }}"></x-form.input>
                </x-form.form>
            </x-slot>
            
            <x-slot name="actions">
                <a class="w-full" href="{{route('dashboard')}}">
                    <x-form.button-cancel>Cancelar</x-form.button-cancel>
                </a>
                <x-form.button form="edit-link-form" type="submit">Salvar</x-form.button>
            </x-slot>
        </x-card>
    </x-container>
</x-layout.app>