<x-landing-layout>
    <x-slider :banners="$banners"></x-slider>
    <x-section>
        <x-slot:title>
            Oficina Especializada Em Manutenção E Consertos
        </x-slot:title>
        <x-slider-card :cards="$services"></x-slider-card>
    </x-section>
    <x-section>
        <x-slot:title>
            Acessórios E Microfones
        </x-slot:title>
        <x-slider-card :cards="$services"></x-slider-card>
    </x-section>
    <x-section>
        <x-slot:title>
            Acessórios E Microfones
        </x-slot:title>
        <x-slider-card :cards="$services"></x-slider-card>
    </x-section>
</x-landing-layout>
