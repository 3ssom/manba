jQuery(function ($) {
  // Search block tagify
  if ($(".tagify--outside").length) {
    var input = document.querySelector("input[name=tags-outside]");
    // init Tagify script on the above inputs
    var tagify = new Tagify(input, {
      whitelist: [
        "Drupal",
        "Wordpress",
        "Laravel",
        "PHP",
        "CMS",
        "Linux",
        "Git",
        "Joomla",
        "Angular",
        "React",
        "Vue",
        "Node",
        "Express",
      ],
      maxTags: 4,
      dropdown: {
        position: "input",
        maxItems: 5,
        enabled: 0, // always opens dropdown when input gets focus
      },
    });

    $(".search-btn").on("click", function () {
      var tags = tagify.getCleanValue();
      console.log(tags);
    });
  }

  var typed = new Typed(".elm-typed", {
    strings: [
      "Drupal",
      "Wordpress",
      "Laravel",
      "PHP",
      "CMS",
      "Linux",
      "Git",
      "Joomla",
      "Angular",
      "React",
      "Vue",
      "Node",
      "Express",
    ],
    typeSpeed: 80,
    backSpeed: 40,
    backDelay: 500,
    startDelay: 1000,
    loop: true,
  });
});
