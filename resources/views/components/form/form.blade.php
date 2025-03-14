<form {{  $attributes->merge(['class' => 'flex flex-col justify-items-start items-center gap-2']) }}>
    @csrf
    @if(session())
        <div>{{ session()->get('message') }}</div>
    @endif
    {{ $slot }}
</form>