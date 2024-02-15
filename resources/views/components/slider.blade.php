@props([
    'banners'
])

<div class="splide slider rounded"
     aria-labelledby="carousel-heading"
     data-splide='{"type":"loop","autoplay":true,"pagination":false,"height": "50vh","cover":true}'>
    <div class="splide__track h-[20em] sm:h-[20em] md:h-[20em] lg:h-[25em]">
        <ul class="splide__list">
            @foreach($banners as $banner)
                <li class="splide__slide" data-splide-interval="3000">
                    <div class="splide__slide__container absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
    {{--                    <div class="absolute text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">--}}
    {{--                   title     --}}
    {{--                    </div>--}}
                        <img class=""
                        src="{{$banner->banner_url}}"/>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
