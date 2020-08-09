$(document).ready(function(){
    $('.img-box').eq(0).siblings().hide();
    var slideIndex = 0;
    setInterval(function(){        
        if( slideIndex < 8 ){
            slideIndex ++;
        }else{
            slideIndex = 0;
        }
        $('.img-box').eq(slideIndex).fadeIn();
        $('.img-box').eq(slideIndex).siblings().fadeOut();
    },3000)
});