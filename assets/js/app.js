jQuery(document).foundation();

// Patch for a Bug in v6.3.1
jQuery(window).on('changed.zf.mediaquery', function() {
    jQuery('.is-dropdown-submenu.invisible').removeClass('invisible');
});

jQuery(document).ready(function($) {

});