@props(['socialMedia' => []])

<footer class="bg-white dark:bg-neutral-900 mt-5">
    <div class="w-full max-w-screen-xl mx-auto py-8 px-5 xl:px-0">
        <div class="lg:flex items-center lg:justify-between">
            <a href="{{ route('home') }}" class="flex justify-center md:pb-4 lg:pb-0 items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <x-logo class="w-10 lg:w-10"></x-logo>
                <span
                    class="hidden ms-3 lg:block self-center lg:text-xl sm:text-lg font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', '') }}</span>
            </a>
            <ul class="flex justify-center flex-wrap gap-5 items-center mb-6 mt-5 md:mt-0 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{$socialMedia['facebook']}}" target="_blank" class="hover:underline">
                        <x-icon.facebook class="w-8 lg:w-10"></x-icon.facebook>
                    </a>
                </li>
                <li>
                    <a href="{{$socialMedia['instagram']}}" target="_blank" class="hover:underline">
                        <x-icon.instagram class="w-8 lg:w-10"></x-icon.instagram>
                    </a>
                </li>
                <li>
                    <a href="{{$socialMedia['youtube']}}" target="_blank" class="hover:underline">
                        <x-icon.youtube class="w-8 lg:w-10"></x-icon.youtube>
                    </a>
                </li>
                <li>
                    <a href="{{$socialMedia['whatsapp']}}" target="_blank" class="hover:underline">
                        <x-icon.whatsapp class="w-8 lg:w-10"></x-icon.whatsapp>
                    </a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
        <span class="block text-sm text-gray-500 text-center dark:text-gray-400">© 2023 Desenvolvido por <a
                href="https://daroz.dev" target="_blank" class="hover:underline">Daroz™</a></span>
    </div>
</footer>

