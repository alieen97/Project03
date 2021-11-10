<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="김혜련"/>
	<meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
	<meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
	<title>board</title>
	<link rel="stylesheet" href="../include/css/green_menu.css"/>
	<link rel="stylesheet" href="css/layout_menu.css"/>
	<link rel="icon" sizes="16x16" href="../include/images/green_pavi_ori.gif">
	<script src="../include/js/jquery-1.9.0.min.js"></script> 
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/menuActive.js"></script> 
	<script src="../include/js/common.js"></script>
	<script src="js/script.js"></script>
	
</head>
<body>
	<header class="cf">
		<?php include "../include/header.php";?>
	</header>
	<section>
		<div class="titleWrap">
			<div id="boardTitle">
				<p class="subTit">student</p>
				<h2>수강생게시판</h2>
				<p class="dashLine"><img src="images/line.png" alt="line"/></p>
				<p class="boardInfo">그린아카데미 수강생이 소통하는 곳입니다.</p>
			</div>
		</div>
		<div id="boardTab">
			<div class="tabInfo fl">Academy Campus</div>
			<img class="fl" src="images/doubleArrow.png" alt="doubleArrow"/>
			<div class="tabCells fl">
				<ul class="one">
					<li class="active"><a href="#">전체</a></li>
					<li><a href="#">안양</a></li>
					<li><a href="#">강남</a></li>
					<li><a href="#">종로</a></li>
					<li><a href="#">일산</a></li>
					<li><a href="#">신촌</a></li>
					<li><a href="#">신도림</a></li>
					<li><a href="#">노원</a></li>
					<li><a href="#">수원</a></li>
					<li><a href="#">대전둔산</a></li>
					<li><a href="#">대전중앙로</a></li>
					<li><a href="#">부산서면(본)</a></li>
				</ul>
				<ul class="two">
					<li><a href="#">안산</a></li>
					<li><a href="#">부천</a></li>
					<li><a href="#">성남</a></li>
					<li><a href="#">청주</a></li>
					<li><a href="#">의정부</a></li>
					<li><a href="#">인천부평</a></li>
					<li><a href="#">인천구월</a></li>
					<li><a href="#">인천청라</a></li>
					<li><a href="#">전주</a></li>
					<li><a href="#">광주</a></li>
					<li><a href="#">대구</a></li>
					<li><a href="#">부산경성대(별)</a></li>
				</ul>
			</div>
		</div>
		<div id="searchBox">
			<form action="search_result.php" method="get" class="searcharea cf">
				<select name="catgo">
					<option value="subject">제목</option>
					<option value="name">글쓴이</option>
					<option value="content">내용</option>
				</select>
				<input type="text" name="search" required="required" placeholder="검색어를 입력해주세요."/>
				<input type="image" src="../include/images/searchBtn.png" alt="searchBtn">
			</form>
		</div>
		<div id="boardContent">
			<div class="first fl cf">
				<div class="num fl">번호</div>
				<div class="cam fl"> 구분</div>
				<div class="Tit fl">제목</div>
				<div class="wri fl">글쓴이</div>
				<div class="file fl">첨부파일</div>
				<div class="dat fl">작성일</div>
				<div class="hit fl">조회수</div>
			</div>
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산, total_record = 11로 가정하고 계산
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
	{
		mysqli_data_seek($result, $i);
		// 가져올 레코드로 위치(포인터) 이동
		$row = mysqli_fetch_array($result);
		// 하나의 레코드 가져오기
		$num         = $row["num"];
		$id          = $row["id"];
		$name        = $row["name"];
		$subject     = $row["subject"];
		$regist_day  = $row["regist_day"];
		$hit         = $row["hit"];
		if ($row["file_name"])
			$file_image = "<img src='../include/images/file.gif'>";
		else
			$file_image = " ";
?>
			<li class="cf">
				<div class="num"><?=$number?></div>
				<div class="cam fl">공통</div>
				<div class="tit"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></div>
				<div class="wri"><?=$name?></div>
				<div class="file"><?=$file_image?></div>
				<div class="dat"><?=$regist_day?></div>
				<div class="hit"><?=$hit?></div>
			</li>	
<?php
		$number--;
	}
	mysqli_close($con);
?>
		</ul>
		<ul id="pageNum" class="cf"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li> <a href='index.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

	// 게시판 목록 하단에 페이지 링크 번호 출력
	for ($i=1; $i<=$total_page; $i++)
	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li class='active'>$i</li>";
		}
		else
		{
			echo "<li> <a href='index.php?page=$i'> $i </a> <li>";
		}
	}

	if ($total_page>=2 && $page != $total_page)		
	{
		$new_page = $page+1;	
		echo "<li> <a href='index.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
		</ul> <!-- page -->	    	
		<ul class="buttons">
			<li><button onclick="location.href='index.php'">목록</button></li>
			<li>
<?php 
	if($userid) {
?>
				<button onclick="location.href='board_form.php'">글쓰기</button>
<?php
	} else {
?>
				<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
<?php
	}
?>
			</li>
		</ul>
		</div>
	</section>
	
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>
</html>