<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="김혜련"/>
	<meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
	<meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
	<title>웹디자인 과정소개</title>
	<link rel="stylesheet" href="../include/css/green_menu.css"/>
	<link rel="stylesheet" href="css/layout_menu.css"/>
	<!--[if lte ie 8]>
		<link href="css/non-ie9.css" rel="stylesheet">
	<![endif]-->

	<link rel="icon" sizes="16x16" href="../include/images/green_pavi_ori.gif">
	<script src="../include/js/jquery-1.9.0.min.js"></script> 
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/DB_springMove_fn.js"></script>	

	<script src="../include/js/menuActive.js"></script>
	<script src="../include/js/common.js"></script>
	<script src="js/script.js"></script>
	
</head>
<body>
	<header class="cf">
		<?php include "../include/header.php";?>
	</header>
	<section>
		<div class="loginWrap cf">
			<div class="head fl">
				<h2>Member <span>Login</span></h2>
				<p>그린컴퓨터아카데미에 오신것을 환영합니다.</p>
			</div>
			<div class="inputWrap fl">
				<input id="loginId" class="id guideText" name="loginId" title="아이디" value="ID" type="text"/>
				<input id="loginPw" class="pass guideText" name="loginPw" title="패스워드" value="Pass" type="password" maxlength="15"/>
				<div class="check">
					<input class="save" type="checkbox" name="userOt"/>
					아이디저장
					<input class="save" type="checkbox" name="userOt"/>
					보안접속
				</div>
			</div>
			<input class="logBtn" value="Login" type="button"/>
			<div class="userSet cf">
				<ul>
					<li><a href="#">아이디찾기</a></li>
					<li class="line">|</li>
					<li class="pass"><a href="#">비밀번호 재설정</a></li>
					<li class="line">|</li>
					<li><a href="#">회원가입</a></li>
				</ul>
			</div>
		</div>
	</section>
	
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>
</html>