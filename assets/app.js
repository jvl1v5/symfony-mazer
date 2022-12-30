/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 *
 * Only add imports of other files here, Javascript code defined here
 * will not be executed.
 * User symfony-mazer.js for your own JS code or import own files
 *
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

// Mazer
import './mazer/js/app';

// Bootstrap
import './mazer/js/bootstrap'

// Symfony-Mazer
import './symfony-mazer';