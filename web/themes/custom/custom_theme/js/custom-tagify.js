jQuery(function ($) {
  // Search block tagify
  if ($(".tagify--outside").length) {
    var input = document.querySelector("input[name=tags-outside]");
    // init Tagify script on the above inputs
    var tagify = new Tagify(input, {
      whitelist: drupalSettings.results,
      maxTags: 4,
      dropdown: {
        position: "input",
        maxItems: 5,
        enabled: 0, // always opens dropdown when input gets focus
      },
    });

    $(".search-btn").on("click", function (e) {
      e.preventDefault();
      var tags = tagify.getCleanValue();
      const keywords = [];
      for (i = 0; i < tags.length; ++i) {
        keywords.push(tags[i].value);
      }
      if (keywords.length > 0) {
        console.log(keywords);
        window.location = "search/node?keys=" + keywords.join(" ");
      }
    });
  }
  var typed = new Typed(".elm-typed", {
    strings: drupalSettings.suggestion,
    typeSpeed: 80,
    backSpeed: 40,
    backDelay: 500,
    startDelay: 1000,
    loop: true,
  });
});
