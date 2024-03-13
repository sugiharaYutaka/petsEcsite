document.addEventListener('DOMContentLoaded', () => {
    $(function(){
        var slideMax = 0
        if(window.innerWidth > 1100){
            slideMax = 3;
        }
        else if(window.innerWidth > 770){
            slideMax = 2;
        }
        else{
            slideMax = 1;
        }

        $('.slider').slick({
            autoplay: true,
            dots: true,
            slidesToShow: slideMax,
            slidesToScroll: 1,
        });
    });
});
