jQuery(document).foundation();

// Patch for a Bug in v6.3.1
jQuery(window).on('changed.zf.mediaquery', function() {
    jQuery('.is-dropdown-submenu.invisible').removeClass('invisible');
});

jQuery(document).ready(function($) {

  $('.home--gallery-item').magnificPopup({
      type: 'image',
      gallery: {
          enabled: true
      },
      image: {
        titleSrc: 'title'
      },
      mainClass: 'mfp-with-zoom',
      zoom: {
          enabled: true,
          duration: 300,
          easing: 'ease-in-out'
      }
  });

});
