// scroll to section
jQuery(".aplb-submenu-subsections a").click(function(e) {
  e.preventDefault();

  const target = jQuery(jQuery(this).attr("href"));

  jQuery("html, body").animate(
    {
      scrollTop: target.offset().top,
    },
    200
  );
});

// unwrap object-fit: cover; images
jQuery(document).ready(function($) {
  $("p:has(.img-cover) img").unwrap();
});
