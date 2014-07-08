$(document).ready(function() {
    var owl = $("#owl-demo");

    owl.owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

    // Custom Navigation Events
    $(".js-next").click(function() {
        owl.trigger('owl.next');
    })
    $(".js-prev").click(function() {
        owl.trigger('owl.prev');
    })

});
