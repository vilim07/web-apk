$(window).on('load', function() {
  AOS.refresh();
  AOS.init({
    once: true
 })
});
if (document.querySelector('.single')) {

$( document).ready(function() {
  $('.gallery-showcase-show').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true

  });
  $('.gallery-showcase').slick({
    asNavFor: '.gallery-showcase-show',
    infinite: true,
    variableWidth: true,
    arrows=false,
    centerMode: true,
    slidesToScroll: 1,
    focusOnSelect: true,
    easing: 'swing'
  });
});
}


if (document.querySelector('.product-section')) {
  $( document ).ready(function() {
    $('.product-slider').slick({
      arrows=false,
      slidesToShow: 1,
      slidesToScroll: 1,
      
      //centerMode: true,
      easing: 'swing',
      speed: 700,
      dots: true,
      customPaging: function(slick,index) {
          return '<a>' + (index + 1) + '</a>';
      }
    });
    filterSelection("all")
  });


  
	function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    } 
    $('.product-slider').slick('setPosition');
  }
  
  // Show filtered elements
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
  
  // Hide elements that are not selected
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
  
  
  // Add active class to the current control button (highlight it)
   var btnContainer = document.getElementById("myCategorySelector");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  } 
}


function openMenu() {
  $( ".mobile-menu" ).toggleClass( "open-menu" )
}
	