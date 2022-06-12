jQuery(document).ready(function ($) {
  // Photo gallery
  $(".custom-select").change(function () {
    var category = $(".custom-select option:selected").text();
    filterSelection(category);
  });

  function filterSelection(c) {
    var x, i;
    x = $(".column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }

  //  owel slider
  $(document).ready(function () {
    $("#owl-demo").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      // nav
      navigation: true,
      navigationText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
      pagination: false,
      // Responsive
      responsive: true,
      items: 3, //10 items above 1000px browser width
      itemsDesktop: [1000, 2], //5 items between 1000px and 901px
      itemsDesktopSmall: [900, 1], // betweem 900px and 601px
      itemsTablet: [600, 1], //2 items between 600 and 0;
      itemsMobile: [479, 1] // itemsMobile disabled - inherit from itemsTablet option
    });
  });

  // validate contact form

  $("#formContact").validate({
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      subject: {
        required: true
      },
      message: {
        required: true
      }
    }
  });
});
