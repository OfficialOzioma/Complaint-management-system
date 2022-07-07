// import './bootstrap';
import 'tw-elements';

// target element that will be dismissed
const targetEl = document.getElementById('alert');

// options object
const options = {
    triggerEl: document.getElementById('triggerElement'),
    transition: 'transition-opacity',
    duration: 1000,
    timing: 'ease-out',

    // callback functions
    onHide: (context, targetEl) => {
        console.log('element has been dismissed')
        console.log(targetEl)
    }
};

/*
* targetEl: required
* options: optional
*/
const dismiss = new Dismiss(targetEl, options);


// hide the target element
dismiss.hide();
