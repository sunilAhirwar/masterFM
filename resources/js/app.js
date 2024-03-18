import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

// footer current year
document.getElementById("current_year").innerHTML = new Date().getFullYear();

Alpine.start();
