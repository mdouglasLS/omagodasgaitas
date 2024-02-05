import './bootstrap';

import Alpine from 'alpinejs';
import 'flowbite';
import Splide from '@splidejs/splide';

window.Alpine = Alpine;

Alpine.start();

let elms = document.getElementsByClassName( 'slider' );

for (let i = 0; i < elms.length; i++ ) {
    new Splide( elms[ i ]).mount();
}
