import './bootstrap';

import jQuery from 'jquery';
window.$ = jQuery;

$('.search-btn').on('click', function() {
    $('#search-dialog').css({
        'display': 'block',
        'z-index': 100,
    })
});
$('#search-dialog').on('click', function() {
    if(event.target === this) { // prevent confusion when the input and button is on clicked
        $(this).css({
            'display': 'none',
            'z-index': -5,
        })
    }
})