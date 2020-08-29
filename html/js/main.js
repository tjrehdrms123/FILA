$(document).ready(function(){
    // 슬라이드 이미지
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
    },3000);
    
    // 팝업창
    $('.dress-box').click(function(){
       $('.item-box').fadeIn()
    });
    $('.delete-btn').click(function(){
        $('.item-box').fadeOut()
    });
    
    // 전송 버튼 Ajax
    $('.submit-btn').click(function(){
       $.ajax({
           url : "/dressform.php",
           contentType: 'application/x-www-form-urlencoded;charset=euc-kr',
           data : {
               name : name,
               password : password,
               item : item,
               color : color
           },
           dataType : "json",
           timeout : 30000 ,
       });  
    });
});