<!DOCTYPE html>
<html>
	
<head>
<title>FILA DONG</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- 모바일 용 웹을 위한 viewport설정 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<!--main.js -->
<script src="js/jquery-1.12.3.js"></script>
<script src="js/slide.js"></script>
<!--<script src="./js/main.js"></script>-->
<!--main.js -->
<!-- font -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<!-- font -->
<!-- 파비콘 -->
<link rel="shortcut icon" href="./images/logo_new.png">
<!--파비콘 -->
<!-- Global CSS -->
<link href="./src/default.css" type="text/css" rel="stylesheet" />
<link href="./src/layout-narrow.css" media="screen and (max-width: 800px)" type="text/css" rel="stylesheet" />
<link href="./src/layout-wide.css?" media="screen and (min-width: 801px)" type="text/css" rel="stylesheet" />	
<!-- /Global CSS -->
<?php if (isset($_GET['sub'])) { ?>
<link href="./src/sub.css" type="text/css" rel="stylesheet" />
<link href="./src/sub-narrow.css" media="screen and (max-width: 800px)" type="text/css" rel="stylesheet" />
<link href="./src/sub-wide.css" media="screen and (min-width: 801px)" type="text/css" rel="stylesheet" />
<?php } else { ?>
<link href="./src/main.css" type="text/css" rel="stylesheet" />
<link href="./src/main-narrow.css" media="screen and (max-width: 800px)" type="text/css" rel="stylesheet" />
<link href="./src/main-wide.css" media="screen and (min-width: 801px)" type="text/css" rel="stylesheet" />
<?php } ?>
</head>
<!--
 > http-equiv = html4 , html5 호환(구형웹브라우져호환)
 > isset = 인수로주어진 변수 존재여부판단
 > $_GET['seb'] = get데이터 중에서 sub인에 존재하는가 
-->
<body>
<!-- 상단 영역 -->
<div class="header-wrapper">
<?php include "./_include/header.php" ?>
</div>
<!-- /상단 영역 -->
<!-- 콘텐츠 영역 -->
<div class="main-wrapper">
	<div class="main">
	<?php
	if (isset($_GET['sub'])) {
		include "./sub/{$_GET['sub']}.html";
	} else {
		include "./main.php";	
	}
	?>		
	</div>
</div>
<!-- /콘텐츠 영역 -->
<!-- 하단 영역 -->
<div class="footer-wrapper">
	<?php include "./_include/footer.php" ?>
</div>
<!-- /하단 영역 -->
</body>
		
</html>