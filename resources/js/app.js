import './bootstrap';

import Alpine from 'alpinejs';
import 'flowbite';
import Splide from '@splidejs/splide';

window.Alpine = Alpine;

Alpine.start();


// slider banner
let banner = document.getElementsByClassName( 'slider' );

for (let i = 0; i < banner.length; i++ ) {
    new Splide( banner[ i ]).mount();
}
