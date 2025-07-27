@props(["title"=>""])

<div class="mt-5 shadow-sm p-2 rounded dark:text-white max-w-screen-xl mx-auto bg-white dark:dark:bg-neutral-900">
    @if($title)
        <h1 class="text-center text-2xl font-bold mt-4">{{ $title }}</h1>
        <x-hr></x-hr>
    @endif

    {{ $slot }}
</div>
