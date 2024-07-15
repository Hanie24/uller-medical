(function ($) {
  $(function () {
    if ($("div").hasClass("top-bar")) {
      $(".change-top").parent().css("top", "auto");
    }
    $(document).scroll(function () {
      var $nav = $("header");
      $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
      if ($("div").hasClass("top-bar")) {
        if ($(this).scrollTop() > $nav.height()) {
          $(".change-top").parent().css("top", "0px");
        } else {
          $(".change-top").parent().css("top", "auto");
        }
      }
    });
  });
})(jQuery);
