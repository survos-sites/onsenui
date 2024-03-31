import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
// these don't include the icons and fonts
// import 'onsenui/css/onsen-css-components.min.css'
// import 'onsenui/css/onsenui.css'
// import 'ionicons'

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

import './js/todo.js';
import './js/services.js';
import './js/controllers.js';
