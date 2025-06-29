import.meta.glob([
    '../images/**',
    '../fonts/**',

  ]);

import 'bootstrap';
import 'admin-lte'

import Alpine from 'alpinejs';
import './overlayscrolbar.js';

window.Alpine = Alpine;

Alpine.start();


