<div class="flex items-center justify-between gap-8">
    <div class="flex items-center justify-end gap-2">
        <form action="{{ route('links.up', $attributes['link']) }}" method="post">
            @csrf
            @method('PATCH')
            <button type="submit"><x-tni-up class="h-6 cursor-pointer text-gray-500"/></button>
        </form>
        <form action="{{ route('links.down', $attributes['link']) }}" method="post"">
            @csrf
            @method('PATCH')
            <button type="submit"><x-tni-down class="h-6 cursor-pointer text-gray-500"/></button>
        </form>
    </div>
    <div class="flex items-center justify-start w-full gap-2">
        <p class="text-xl">{{ $attributes['link']->name }}</p>
        <p class="font-light text-gray-500"> {{ $attributes['link']->link }}</p>
    </div>
    <div class="flex items-center gap-4">
    <button type="submit">
        <a href="{{ route('links.edit', $attributes['link']) }}">
            <x-lucide-edit-3 class="h-6 cursor-pointer text-gray-500"/>
        </a> 
    </button>
    <form action="{{ route('links.destroy', $attributes['link']) }}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar?')">
        @csrf
        @method('DELETE')
        <button type="submit">
            
        <x-lucide-trash-2 class="h-6 cursor-pointer text-red-700"/></button>
    </form>
    </div>
</div>