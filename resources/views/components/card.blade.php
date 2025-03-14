@props(['actions', 'body', 'title'])

<div class="bg-slate-900 p-10 rounded-xl flex flex-col gap-12 min-w-1/3">
    <h1 class="text-3xl font-bold">{{ $title }}</h1>
    <div class="flex flex-col gap-8">
        {{ $body }}
    </div>
    <div class="flex justify-between items-center gap-2 w-full">
    {{ $actions }}
    </div>
</div>