<div class="w-full flex h-[80px] bg-slate-950 items-center justify-between px-20 fixed top-0 left-0 border-b-1 border-gray-800">
    <a href="/" class="text-2xl text-gray-500 font-bold cursor-pointer hover:text-white">MyLinks</a>
    
    <div class="flex flex-row items-center justify-center gap-4">
        
        @auth
            <!-- Se o usuário estiver logado, exibe "Perfil", Foto e "Logout" -->
            <a href="{{ route('profile') }}" class="font-bold hover:text-white text-gray-500">Perfil</a>

            <div class="flex justify-center items-center">
                @if(Auth::user()->photo)
                    <img class="overflow-hidden rounded-full bg-gray-200 w-10 h-10" 
                        src="{{ asset('storage/' . Auth::user()->photo) }}" 
                        alt="User Photo">
                @else
                    <!-- Ícone padrão caso não tenha foto -->
                    <img class="overflow-hidden rounded-full bg-gray-200 w-10 h-10 p-2" 
                         src="{{ asset('storage/images/default-avatar.png') }}" 
                        alt="Default Avatar">
                @endif
            </div>

            <a href="{{ route('logout') }}" class="font-bold hover:text-white text-gray-500">Logout</a>
        
        @else
            <!-- Se o usuário NÃO estiver logado, exibe apenas "Login" -->
            <a href="{{ route('login') }}" class="font-bold hover:text-white text-gray-500">Login</a>
        @endauth

    </div>
</div>
