jQuery(document).ready(function($) {
    
    

    // Add active class menu
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $('.menu li a').each(function() {
        if (this.href === path) {
        $(this).addClass('active');
        }
    });


});