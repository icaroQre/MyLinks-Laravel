<div class="flex flex-col gap-1 items-start justify-items-start w-full">
    <label class="text-sm font-light" for="{{ $attributes['name'] }}"> {{ $attributes['text'] }} </label>
    <input class="border border-gray-500 rounded-lg py-1 px-2 focus:ring-2 focus:outline-none font-light w-full" {{ $attributes }}> 
    @error($attributes['name'])
        <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror 
</div>
