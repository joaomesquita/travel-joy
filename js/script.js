$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        900:{
            items:3
        },
    }
});

var urlAtual = window.location.href;

$(function() {
    if (urlAtual != "http://localhost/www/travel-joy/index.php") {
        $(".navbar").css("background", "#45547E");
    } else {
        $(window).scroll(function(){
            if($(window).scrollTop() > 0) {
                $(".navbar").css("background", "#45547E");
            } else {
                $(".navbar").css("background", "none");
            }
        })
    }
});