jQuery(function ($) {
  var current_fs, next_fs, previous_fs;

  // No BACK button on first screen
  if ($("#mustforms .show").hasClass("first-screen")) {
    $("#mustforms .prev").css({ display: "none" });
  }

  // Next button
  $("#mustforms .next-button").click(function () {
    current_fs = $(this).parent().parent();
    next_fs = $(this).parent().parent().next();

    $("#mustforms .prev").css({ display: "block" });

    $(current_fs).removeClass("show");
    $(next_fs).addClass("show");

    $("#mustforms #progressbar li")
      .eq($("#mustforms .card2").index(next_fs))
      .addClass("active");

    current_fs.animate(
      {},
      {
        step: function () {
          current_fs.css({
            display: "none",
            position: "relative",
          });

          next_fs.css({
            display: "block",
          });
        },
      }
    );
  });

  // Previous button
  $("#mustforms .prev").click(function () {
    current_fs = $("#mustforms .show");
    previous_fs = $("#mustforms .show").prev();

    $(current_fs).removeClass("show");
    $(previous_fs).addClass("show");

    $("#mustforms .prev").css({ display: "block" });

    if ($("#mustforms .show").hasClass("first-screen")) {
      $("#mustforms .prev").css({ display: "none" });
    }

    $("#mustforms #progressbar li")
      .eq($("#mustforms .card2").index(current_fs))
      .removeClass("active");

    current_fs.animate(
      {},
      {
        step: function () {
          current_fs.css({
            display: "none",
            position: "relative",
          });

          previous_fs.css({
            display: "block",
          });
        },
      }
    );
  });
});
