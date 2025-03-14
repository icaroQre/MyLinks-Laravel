<x-layout.app>
    <x-container>
        <x-card>
            <x-slot name="title">
                Perfil
            </x-slot>

            <x-slot name="body">
                @if($user->photo)
                <div class="flex justify-center items-center w-full">
                    <img class="overflow-hidden rounded-full bg-gray-200 w-24 h-24" src="storage/{{ $user->photo }}" alt="Photo">
                </div>
                @else
                <div class="flex justify-center items-center w-full">
                <img class="overflow-hidden rounded-full bg-gray-200 w-24 h-24 p-2" 
                src="{{ asset('storage/images/default-avatar.png') }}">
                </div>
                
                @endif
                <x-form.form action="{{ route('profile') }}" method="post" enctype="multipart/form-data" id="edit-profile-form">
                @method('put')
                    <x-form.input text="Foto" type="file" name="photo"></x-form.input>
                    <x-form.input text="Nome" type="text" name="name" placeholder="Name" value="{{ old('name', $user->name) }}"></x-form.input>
                    <x-form.input text="Descrição" name="description" placeholder="Um breve resumo..." value="{{ old('description', $user->description) }}"></x-form.input>
                    <x-form.input text="Seu link: www.mylinks.com/@ " type="text" name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}"></x-form.input>
                </x-form.form>
            </x-slot>
            
            <x-slot name="actions">
                <a class="w-full" href="{{route('dashboard')}}">
                    <x-form.button-cancel>Voltar</x-form.button-cancel>
                </a>
                <x-form.button form="edit-profile-form" type="submit">Salvar</x-form.button>
            </x-slot>
        </x-card>
    </x-container>
</x-layout.app>