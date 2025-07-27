@props([
    'banners'
])

<div class="splide slider rounded max-w-screen-xl mx-auto mt-5"
     aria-labelledby="carousel-heading"
     data-splide='{"type":"loop","autoplay":true,"pagination":false,"height": "50vh","cover":true}'>
    <div class="splide__track h-[20em] sm:h-[20em] md:h-[20em] lg:h-[25em] rounded">
        <ul class="splide__list">
            @foreach($banners as $banner)
                <li class="splide__slide" data-splide-interval="3000">
                    <div class="splide__slide__container absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    >
                        <img class="" src="{{$banner->banner_url}}"/>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
