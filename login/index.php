<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="김혜련"/>
	<meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
	<meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
	<title>로그인</title>
	<link rel="stylesheet" href="../include/css/green_menu.css"/>
	<link rel="stylesheet" href="css/layout_menu.css"/>
	<!--[if lte ie 8]>
		<link href="css/non-ie9.css" rel="stylesheet">
	<![endif]-->

	<link rel="icon" sizes="16x16" href="../include/images/green_pavi_ori.gif">
	<script src="../include/js/jquery-1.9.0.min.js"></script> 
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/menuActive.js"></script>
	<script src="../include/js/common.js"></script>
	
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
				<form  name="login_form" method="post" action="login.php"> 
					<div class="inputTextWrap fl">
						<input id="id" class="id" name="id" title="아이디" value="alieen" type="text" placeholder="아이디"/>
						<input id="pass" class="pass" name="pass" title="패스워드" value="19991103" type="password" maxlength="15" placeholder="비밀번호"/>
					</div>
					<button class="logBtn" onclick="check_input()">Login</span></a>
				</form>
			</div>
			<div class="check cf fr">
				<div class="saveWrap">
					<input class="save fl" type="checkbox" name="userOt"/>
					<p class="fl">아이디저장</p>
				</div>
				<div class="secuWrap">
					<input class="secu fl" type="checkbox" name="userOt"/>
					<p class="fl">보안접속</p>
				</div>
			</div>
			<div class="userSet cf fl">
				<ul>
					<li><a href="../modify/member_form.php">아이디찾기</a></li>
					<li class="line">|</li>
					<li class="pass"><a href="../modify/member_form.php">비밀번호 재설정</a></li>
					<li class="line">|</li>
					<li><a href="../modify/member_form.php">회원가입</a></li>
				</ul>
			</div>
		</div>
	</section>
	</section>
	
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>
</html>