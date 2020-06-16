<div class="header-wrapper">
    <div id="header" class="header">
        <h1 class="header-logo">
        	<img src="./images/logo_new.png" alt="logo" class="logo">
        </h1>
        <!-- 반응형을 위한 네비게이터 마크업 -->
        <!-- label, input 태그는 wide의 경우에는 불필요하므로display: none으로 처리 필요 -->
        <!--
        narrow의 경우에는 label 태그와 input 태그를 연결시키므로 인해
        메뉴 아이콘을 클릭시 체크박스가 체크되도록 하며
        다시 클릭시 체크가 풀리도록 유도할 예정. CSS에서 선택자로 활용.
        -->
        <input type="checkbox" id="header-navi-toggle" />
        <label for="header-navi-toggle"><span></span></label>
        <ul id="header-navi" class="header-navi">
			<li><a href="/?sub=page1">MAN</a></li>
			<li><a href="/?sub=page2">WOMAN</a></li>
			<li><a href="/?sub=page3">BEST</a></li>
        </ul>
        <!-- /반응형을 위한 네비게이터 마크업 -->
    </div>
</div>