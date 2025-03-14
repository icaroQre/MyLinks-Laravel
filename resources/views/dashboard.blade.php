<x-layout.app>

<x-container>
    <x-card>
        <x-slot name="title">
        <p class="">{{ auth()->user()->name }}</p>
        <p class="text-xl font-light text-gray-500">{{ auth()->user()->description }}</p>
        </x-slot>
        <x-slot name="body">
            @foreach($links as $link)
                <x-user-link :link="$link">
                
                    
                </x-user-link>
            @endforeach
        </x-slot>
        
        <x-slot name="actions">
            <a class="w-full" href="{{ route('links.create') }}">
                <x-form.button type="submit">
                    Adicionar novo link
                </x-form.button>
            </a> 
        </x-slot>
    </x-card>

                </x-container>




</x-layout.app>