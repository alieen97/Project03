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
	<script src="../include/js/menuActive.js"></script> 
	<script src="../include/js/common.js"></script>
	<script src="js/script.js"></script>

</head>
<body>
	<header>
		<?php include "../include/header.php";?>
	</header>
	<section>
		<div class="titleWrap">
			<div id="boardTitle">
				<p class="subTit">student</p>
				<h2>자주묻는 질문</h2>
				<p class="dashLine"><img src="../include/images/line.png" alt="line"/></p>
				<p class="boardInfo">그린아카데미 사이트 이용에 도움이 될만한 <br/>자주 묻는 질문을 모았습니다.</p>
			</div>
		</div>
		<div id="wrap">
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
<?php
	
	$catagory = $_GET['catgo'];
 	$search_con = $_GET['search'];

    if($catagory=='subject'){
        $catname = '제목';
    } else if($catagory=='content'){
        $catname = '내용';
    }
?>
		<div id="searchBox">
			<form action="search_result.php" method="get" class="searcharea cf">
				<select name="catgo">
					<option value="subject">제목</option>
					<option value="content">내용</option>
				</select>
				<input type="text" name="search" id="search" required="required" placeholder="검색어를 입력해주세요."/>
				<input type="image" src="../include/images/searchBtn.png" alt="searchBtn">
			</form>
		</div>

			<div id="qnaContent" class="cf">
			</div>
		</div>
	</section>
	
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>
</html>