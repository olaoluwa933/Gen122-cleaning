window.onload = function(){
  }
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 160) {
        document.getElementById("navigation").classList.add("active");
    } else {
        document.getElementById("navigation").classList.remove("active");
    }
    }


    $('#commercial-cleaning .service-body').inView({
        in: function() {
            var navitem = $('.nav-item').eq(1);
            $(".nav-item").not(navitem).removeClass("active");
            navitem.addClass("active");
        }
})

$('#end-ten-cleaning .service-body').inView({
  in: function() {
      var navitem = $('.nav-item').eq(2);
      $(".nav-item").not(navitem).removeClass("active");
      navitem.addClass("active");
  }
})

$('#airbnb-cleaning .service-body').inView({
  in: function() {
      var navitem = $('.nav-item').eq(3);
      $(".nav-item").not(navitem).removeClass("active");
      navitem.addClass("active");
  }
})

$('#carpet-cleaning .service-body').inView({
  in: function() {
      var navitem = $('.nav-item').eq(4);
      $(".nav-item").not(navitem).removeClass("active");
      navitem.addClass("active");
  }
})

$(document).ready(function(){
  $("a").on('click', function(event) {
    if(this.hash !=""){
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      })
    }
  })
})