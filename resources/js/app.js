import './bootstrap';

import Alpine from 'alpinejs';
import 'flowbite';
import Splide from '@splidejs/splide';

window.Alpine = Alpine;

Alpine.start();

// slider banner
let banner = document.getElementsByClassName( 'slider' );

document.addEventListener('DOMContentLoaded', () => {

    for (let i = 0; i < banner.length; i++) {
        new Splide(banner[i], {
            arrows: false,
            gap: 20,
            lazyLoad: true,
        }).mount();
    }
})
