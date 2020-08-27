<div class="main-content">
	<ul id="img-slide">
		<li class="img-box">
			<img src="images/slide/slide01.png" alt="img1"> 
		</li>
		<li class="img-box">
			<img src="images/slide/slide02.png" alt="img2">
		</li>
		<li class="img-box">
			<img src="images/slide/slide03.png" alt="img3">
		</li>
		<li class="img-box">
			<img src="images/slide/slide04.png" alt="img4">
		</li>	
		<li class="img-box">
			<img src="images/slide/slide05.png" alt="img5">
		</li>	
		<li class="img-box">
			<img src="images/slide/slide06.png" alt="img6">
		</li>	
		<li class="img-box">
			<img src="images/slide/slide07.png" alt="img7">
		</li>	
		<li class="img-box">
			<img src="images/slide/slide08.png" alt="img8">
		</li>	
		<li class="img-box">
			<img src="images/slide/slide09.png" alt="img9">
		</li>																			
	</ul>
    <?php
    $str = array(
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
       array(
        'title' => '<온라인단독>FILAECH 등판 로고',
        'sub_title' => '루츠핏 반팔 티셔츠',
        'price' => 32000,
        'sqle' => '24000 (25% ↓)'
       ),
    );
    ?>  	
   <!-- one drress-box -->
   <p class="title">BEST ITEM</p>
    <?php 
        for( $i = 0; $i<count($str);  $i++ ){
            $num = sprintf('%02d',($i+1));
    ?>	
	<div class="dress-box">		
		<div>
			<img src="images/dress/dress<?php echo $num?>.jpg" alt="">
		</div>
		<div class="dress-con">
			 <?php echo $str[$i]['title'] ?><br>
			 <?php echo $str[$i]['sub_title'] ?><br>
			 <span class="normal"><?php echo $str[$i]['price'] ?></span>
			 <span class="sale"><?php echo $str[$i]['sqle'] ?></span>
			 <div class="colorchip">
			 	<button class="btn-black"></button>
			 	<button class="btn-green"></button>
			 	<button class="btn-pink"></button>
			 </div>
		</div>
	</div>	
	<?php 
    }
	?>
	<!-- one drress-box -->
	
	<!-- two drress-box -->
	<div class="subbanner">
		<div>
			<img src="images/subbanner/subbanner01.jpg" alt="">
		</div>
	</div>							
	<p class="title">FILA</p>	
    <?php 
        for( $i = 0; $i<count($str);  $i++ ){
            $num = sprintf('%02d',($i+1));
    ?>	
	<div class="dress-box">		
		<div>
			<img src="images/dress/dress<?php echo $num?>.jpg" alt="">
		</div>
		<div class="dress-con">
			 <?php echo $str[$i]['title'] ?><br>
			 <?php echo $str[$i]['sub_title'] ?><br>
			 <span class="normal"><?php echo $str[$i]['price'] ?></span>
			 <span class="sale"><?php echo $str[$i]['sqle'] ?></span>
			 <div class="colorchip">
			 	<button class="btn-black"></button>
			 	<button class="btn-green"></button>
			 	<button class="btn-pink"></button>
			 </div>
		</div>
	</div>	
	<?php 
    }
	?>
    <!-- two drress-box -->
</div>
