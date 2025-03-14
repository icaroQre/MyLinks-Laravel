    <x-layout.app>
        <x-container>
            <div class="flex flex-col items-center justify-center gap-4">
            @if($user->photo)
            <img class="overflow-hidden rounded-full bg-gray-200 w-24 h-24" 
            src="{{ asset('storage/' . $user->photo) }}" 
            alt="User Photo">
            @else
            <!-- Ícone padrão caso não tenha foto -->
            <img class="overflow-hidden rounded-full bg-gray-200 w-24 h-24 p-2" 
            src="{{ asset('storage/images/default-avatar.png') }}" 
            alt="Default Avatar">
            @endif
            <p class="text-lg text-gray-500">{{$user->handler}}</p>
            <div class="flex flex-col items-center justify-center gap-1">
                <p class="text-2xl font-bold">{{$user->name}}</p>
                <p class="text-lg text-gray-500">{{$user->description}}</p>
            </div>


            @foreach($links as $link)
                <x-public-link :link="$link">
                </x-public-link>
            @endforeach


            </div>
        </x-container>

    </x-layout.app>