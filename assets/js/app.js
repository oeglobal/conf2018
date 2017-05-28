jQuery(document).foundation();

// Patch for a Bug in v6.3.1
jQuery(window).on('changed.zf.mediaquery', function() {
    jQuery('.is-dropdown-submenu.invisible').removeClass('invisible');
});

jQuery(function() {
  var iframe = jQuery('#storyfeed');
  var w = jQuery(window), b = jQuery(document.body);
  // resize on message
  w.on('message', function (e) {
    var d = e.originalEvent.data;
    if (d && d.height && d.height > 0) {
      iframe.css('height', d.height);
    }
  });
  // send scroll data
  function s() {
      iframe[0].contentWindow.postMessage({pxtobottom: b.height()-(w.scrollTop()+w.height())}, '*');
  }
  w.on('scroll', s);
  iframe.on('load', s);

});

jQuery(document).ready(function($) {

});
