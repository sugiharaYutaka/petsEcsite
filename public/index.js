document.addEventListener('DOMContentLoaded', () => {

    $(function(){
        $('.slider').slick({
            autoplay: true,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
        });
    });
});