<x-landing-layout>
    <x-section>
        <x-slider :banners="$banners"></x-slider>
    </x-section>
    <x-section>
        <div>
            <h1 class="text-center text-2xl font-bold my-4">Oficina Especializada Em Manutenção E Consertos</h1>
            <x-slider-card :cards="$services"></x-slider-card>
        </div>
    </x-section>
    <x-section>
        <h1 class="mb-60 text-center text-2xl font-bold py-60">Acessórios e microfones</h1>
    </x-section>
</x-landing-layout>
