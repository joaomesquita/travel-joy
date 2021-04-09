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

$(window).scroll(function(){
    if($(window).scrollTop() > 0) {
        $(".navbar-home").css("background", "#45547E");
    } else {
        $(".navbar-home").css("background", "none");
    }
})