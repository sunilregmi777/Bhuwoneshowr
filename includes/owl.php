<script src="owl/jquery.min.js"></script>
<script src="owl/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:false,
    margin:0,
    nav:true,
    navText: [ '', '' ],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>