jQuery(".aplb-submenu-subsections a").click(function(e) {
  e.preventDefault();

  const target = jQuery(jQuery(this).attr("href"));

  jQuery("html, body").animate(
    {
      scrollTop: target.offset().top
    },
    200
  );
});
