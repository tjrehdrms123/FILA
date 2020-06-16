window.addEventListener('load',function(){
	window.setInterval(imgSlide,2000);
});

function imgSlide(){
	var on = document.querySelector('.on');
	var elImg = document.querySelectorAll('#img-slide li > img');
		if( elImg[0].className === 'on' ){
			elImg[0].removeAttribute('class');
			elImg[1].setAttribute('class','on');
		}
		else if( elImg[1].className === 'on' ){
			elImg[1].removeAttribute('class');
			elImg[2].setAttribute('class','on');				 
		}	
		else if( elImg[2].className === 'on' ){
			elImg[2].removeAttribute('class');
			elImg[3].setAttribute('class','on');						
		}
		else if( elImg[3].className === 'on' ){
			elImg[3].removeAttribute('class');
			elImg[4].setAttribute('class','on');						
		}
		else if( elImg[4].className === 'on' ){
			elImg[4].removeAttribute('class');
			elImg[5].setAttribute('class','on');						
		}
		else if( elImg[5].className === 'on' ){
			elImg[5].removeAttribute('class');
			elImg[6].setAttribute('class','on');						
		}
		else if( elImg[6].className === 'on' ){
			elImg[6].removeAttribute('class');
			elImg[7].setAttribute('class','on');						
		}
		else if( elImg[7].className === 'on' ){
			elImg[7].removeAttribute('class');
			elImg[8].setAttribute('class','on');						
		}
		else if( elImg[8].className === 'on' ){
			elImg[8].removeAttribute('class');
			elImg[0].setAttribute('class','on');						
		}			
}; 
/*
    * /석동근/ 이미지 슬라이드 *
	img 태그를 읽어와 on 이라는 class를 부여하는 형식입니다
	이미지가 추가되면 JS도 변경되어서 추후 가변적으로 변경되도록 수정 및 변경해야합니다
*/