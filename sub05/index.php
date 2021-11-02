<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="김혜련"/>
	<meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
	<meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
	<title>QnA</title>
	<link rel="stylesheet" href="../include/css/green_menu.css"/>
	<link rel="stylesheet" href="../include/css/board_qna_menu.css"/>
	<link rel="stylesheet" href="css/layout_menu.css"/>

	<link rel="icon" sizes="16x16" href="../include/images/green_pavi_ori.gif">
	<script src="../include/js/jquery-1.7.1.min.js"></script> 
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
		<div id="wrap">
		<div id="boardTitle">
			<p class="subTit">student</p>
			<h2>자주묻는 질문</h2>
			<p class="dashLine"><img src="../include/images/line.png" alt="line"/></p>
			<p class="boardInfo">그린아카데미 사이트 이용에 도움이 될만한 <br/>자주 묻는 질문을 모았습니다.</p>
		</div>
		<div id="searchBox">
			<select name="" id="">
				<option value="제목">제목
				<option value="내용">내용
			</select>
			<input type="text" name="searchText" id="searchText" class="guideText" value="검색어를 입력해주세요."/>
			<input type="image" src="../include/images/searchBtn.png" alt="searchBtn">
		</div>
		<div id="boardTab">
			<div class="tabInfo fl">Academy Campus</div>
			<img class="fl" src="../include/images/doubleArrowR.png" alt="doubleArrow"/>
			<div class="tabCells fl">
				<ul class="one">
					<li class="active"><a href="#">전체</a></li>
					<li><a href="#">회원정보</a></li>
					<li><a href="#">수강신청</a></li>
					<li><a href="#">학원이용</a></li>
					<li><a href="#">실업자국비지원</a></li>
					<li><a href="#">직장인환급</a></li>
				</ul>
				<ul class="two">
					<li><a href="#">동영상강의</a></li>
					<li><a href="#">결제/환불취소</a></li>
					<li><a href="#">취업지원센터</a></li>
					<li><a href="#">더조은포인트</a></li>
					<li><a href="#">클럽</a></li>
					<li><a href="#">기타</a></li>
				</ul>
			</div>
		</div>
			<div id="qnaContent" class="cf">
			</div>
		<div id="pageNum">
			<ul>
				<li class="pageImg1"><a href="#"><img src="../include/images/doubleArrowL.png" alt="doubleArrowL"/></a></li>
				<li class="pageImg2"><a href="#"><img src="../include/images/ArrowL.png" alt="ArrowL.png"/></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li class="active"><a href="#">7</a></li>
				<li><a href="#">8</a></li>
				<li><a href="#">9</a></li>
				<li><a href="#">10</a></li>
				<li class="pageImg3"><a href="#"><img src="../include/images/doubleArrowR.png" alt="doubleArrowR"/></a></li>
				<li class="pageImg4"><a href="#"><img src="../include/images/ArrowR.png" alt="ArrowR"/></a></li>
			</ul>
		</div>
			<div id="quickMenu">
				<ul>
					<li class="fl"><a href="#">수강료 조회하기</a></li>
					<li class="fl"><a href="#">국비지원 대상 조회</a></li>
					<li class="fl"><a href="#">포트폴리오</a></li>
					<li class="fl"><a class="last" href="#">취업지원센터</a></li>
				</ul>
			</div>
		</div>
	</section>
	
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>
</html>