<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="김혜련"/>
	<meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
	<meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
	<title>그린컴퓨터아카데미</title>
	<link rel="stylesheet" href="include/css/green_menu.css"/>
	<link rel="stylesheet" href="include/css/layout_menu.css"/>
	<!--[if lte ie 8]>
		<link href="css/non-ie9.css" rel="stylesheet">
	<![endif]-->

	<link rel="icon" sizes="16x16" href="include/images/green_pavi_ori.gif">
	<script src="include/js/jquery-1.10.2.min.js"></script>
	<script src="include/js/jquery.easing.1.3.min.js"></script>	
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script><!-- 날씨아이콘 -->
	<script type="text/javascript" src="include/js/jquery-ui-1.10.4.custom.min.js"></script> <!-- UI 플러그인 연동 -->
	<script type="text/javascript" src="include/js/jquery.cookie.js"></script>  <!-- 쿠키 플러그인 연동 -->
	<script src="include/js/html5div.js"></script>
	<script src="include/js/html5shiv.js"></script>
	<script src="include/js/DB_springMove_fn.js"></script>	
	<script src="include/js/weatherAnyang.js"></script>	
	<script src="include/js/weatherSeoul.js"></script>	
 	<script src="include/js/weatherSuwon.js"></script>	
	<script src="include/js/weatherBusan.js"></script>	
	<script src="include/js/mainBanner.js"></script>
	<script src="include/js/popoup.js"></script>
	<script src="include/js/menuActive.js"></script>	
	<script src="include/js/main.js"></script>	
	


</head>
<body>
	<header class="cf">
		<?php include "./header.php";?>
	</header>
	<span class="quickToggle quickOpen">
		<span class="index"></span>
	</span>
	<div class="quickMenu">
		<h4 class="quickLogo"><a href="index.html"><img src="include/images/quickLogo.png" alt=""/></a></h4>
		<ul class="nav">
			<li><a href="sub04/index.html" class="">그린소개<span>▼</span></a>
				<ul class="sub">
					<li><a href="sub04/index.html">기관소개</a></li>
					<li><a href="sub04/index.html">기관연혁</a></li>
					<li><a href="sub04/index.html">사업연혁</a></li>
					<li><a href="sub04/index.html">언론보도 & 뉴스</a></li>
				</ul>
			</li>
			<li><a href="sub04/index.html">지점안내<span>▼</span></a>
				<ul class="sub">
					<li><a href="sub04/index.html">지점소개</a></li>
					<li><a href="sub04/index.html">강사소개</a></li>
					<li><a href="sub04/index.html">시설소개</a></li>
					<li><a href="sub04/index.html">위치안내</a></li>
				</ul>
			</li>
			<li><a href="sub04/index.html">커뮤니티<span>▼</span></a>
				<ul class="sub">
					<li><a href="sub04/index.html">공지사항</a></li>
					<li><a href="sub04/index.html">그린채널</a></li>
					<li><a href="sub04/index.html">그린매거진</a></li>
					<li><a href="sub04/index.html">자격증정보</a></li>
				</ul>
			</li>
			<li><a href="sub04/index.html">고객센터<span>▼</span></a>
				<ul class="sub">
					<li><a href="sub04/index.html">고객의소리</a></li>
					<li><a href="sub04/index.html">장비/시설점검 요청</a></li>
					<li><a href="sub04/index.html">온라인결제</a></li>
					<li><a href="sub04/index.html">설문조사</a></li>
				</ul>
			</li>
		</ul>
		<ul class="quickIcon">
			<li>
				<a href="sub04/index.html"><img src="include/images/quickIcon1_off.png" alt=""/>그린채널</a>
			</li>
			<li>
				<a href="sub04/index.html"><img src="include/images/quickIcon2_off.png" alt=""/>그린매거진</a>
			</li>
			<li>
				<a href="sub04/index.html"><img src="include/images/quickIcon3_off.png" alt=""/>그린유튜브</a>
			</li>
		</ul>
		<ul class="member">
			<li class="first"><a href="login/index.html">로그인</a></li>
			<li><a href="login/index.html">회원가입</a></li>
			<li><a href="login/index.html">My study</a></li>
		</ul>
	</div>
	<section>
		<?php include "./main.php";?>
	</section>
	<footer>
		<?php include "./footer.php";?>		
	</footer>
	<div class="balloon">
		<div class="balloonWrap">
			<div class="balloonBox"></div>
			<img src="include/images/balloonImg.png" alt="balloonImg"/>
		</div>
	</div>
	<div id="popWrap">
		<img src="include/images/popup1 copy.png" alt="실내건축, 이런 회사를 다니고 싶다."/>
		<a href="#" class="close">닫기</a>
		<a href="#" class="dayClose">하루동안 닫기</a>
	</div>
	
	<script src="include/js/count1.js"></script>
	<script src="include/js/count2.js"></script>
	<script src="include/js/count3.js"></script>
	<script src="include/js/count4.js"></script>	
</body>
</html>