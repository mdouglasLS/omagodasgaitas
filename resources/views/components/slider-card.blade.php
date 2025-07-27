@props(['cards'])

<div class="splide slider rounded m-0"
     aria-labelledby="carousel-heading"
     id="splide-container"
     data-splide='{"type":"loop","autoplay":true,"height": "45vh","cover":true, "focus": 0, "perPage": 4,
                 "breakpoints": {
                    "576": {
                        "perPage": 1,
                        "height": "60vh"
                    },
                    "768": {
                        "perPage": 3
                    },
                    "992": {
                        "perPage": 3
                    },
                    "1200": {
                        "perPage": 4
                    }
                 }}'>
    <div class="splide__track">
        <ul class="splide__list">
            @foreach($cards as $card)
                <li class="splide__slide" data-splide-interval="3000">
                    <div class="splide__slide__container flex justify-center">
                        <div class="border border-gray-200 rounded-md shadow-sm dark:shadow-neutral-700 dark:bg-neutral-800 dark:border-gray-800">
                            <a href="https://google.com" target="_blank">
                                <img class="rounded-t-md" src="{{ $card->thumbnail_url }}" alt="" />
                            </a>
                            <div class="p-2">
                                <a href="#">
                                    <h5 class="mb-2 font-bold md:text-xl sm:text-lg text-gray-900 dark:text-white">{{ $card->title }}</h5>
                                </a>
                                <p class="mb-2 font-normal sm:text-sm md:text-base text-gray-700 dark:text-gray-400">{{ substr($card->description, 0, 80) }}</p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
