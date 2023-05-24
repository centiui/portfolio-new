$(window).on("load", function() {
    $(".loader-wrapper").fadeOut("slow");
    $(".navbar").fadeIn("fast");
});


$({
    Counter: 0
}).animate({
    Counter: $('.Single').text()
}, {
    duration: 1000,
    easing: 'swing',
    step: function() {
        $('.Single').text(Math.ceil(this.Counter));
    }
});

$('.js-tilt').tilt({
    scale: 1.2,
    glare: true,
    maxGlare: .5
})