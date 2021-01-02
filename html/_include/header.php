<?php
    $hostname=$_SERVER["HTTP_HOST"]; //도메인명(호스트)명을 구합니다.
?>
<div class="header-wrapper">
    <h1 class="header-logo">
        <a href="<?php echo "http://".$hostname ?>">
            <img src="./images/logo_new.png" alt="logo" class="logo">
        </a>        
    </h1>
    <div id="header" class="header">
        <div>
            <div class="inp-box">
                <input type="text" class="inp_search" name="" id="" value="" placeholder="BTS 가을 컬렉션">
                <label for="search-input">
                    <i class="fa fa-search pull-right cus-search" aria-hidden="true"></i>
                    <span class="sr-only" papago-id="50" papago-translate="translated">
                        <font class="papago-parent">
                            <font class="papago-source" style="display:none;">Search icons</font>검색 아이콘
                        </font>
                    </span>
                </label>
            </div>
        </div>
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
            <li><a href="/?sub=page1">기념일 계산기</a></li>
            <li><a href="/?sub=page2">REVIEW</a></li>
            <li><a href="/?sub=page3">FAQ</a></li>
        </ul>
        <div class="pc-event">
            <span class="header-event">
                <a href="#">기획전&이벤트&룩북</a>
            </span>
        </div>        
        <!-- /반응형을 위한 네비게이터 마크업 -->
    </div>
</div>