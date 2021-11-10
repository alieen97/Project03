<!DOCTYPE html>
<html lang="ko">
<head>
	  <meta charset="UTF-8">
	  <meta name="Generator" content="Notepad++"/>
	  <meta name="Author" content="김혜련"/>
	  <meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
	  <meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
	  <title>그린컴퓨터아카데미</title>
	  <link rel="icon" sizes="16x16" href="../include/images/green_pavi_ori.gif"> 
	  <script src="../include/js/jquery-1.10.2.min.js"></script>
	  <link rel="stylesheet" href="../include/css/green_menu.css"/>
	  <link rel="stylesheet" href="../include/css/board_form.css" />
	  <script src="../include/js/menuActive.js"></script>
	  <script src="../include/js/main.js"></script>
	  <link rel="stylesheet" type="text/css" href="../main/css/message.css" />
	<script>
		function check_input(){
			if (!document.board_form.subject.value.trim())
			{
				alert("제목을 입력하세요!");
				document.board_form.subject.focus();
				return;
			}
			if(!document.board_form.content.value.trim())
			{
				alert("내용을 입력하세요!");
				document.board_form.content.focus();
				return;
			}
			document.board_form.submit();
		}
	</script>
</head>
<body>
	<header>
		  <?php include "../include/header.php";?>
	</header>
	<section>
		<div id="boardBox">
			<h3 id="boardTitle">
				게시판 > 글쓰기
			</h3>
			<form name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
				<ul id="boardForm">
					<li>
						<span class="col1">이름 : </span>
						<span class="col2"><?=$username?></span>
					</li>
					<li class="title">
						<span class="col1">제목 : </span>
						<span class="col2"><input name="subject" type="text"></span>
					</li>
					<li id="textArea">
						<span class="col1">내용 : </span>
						<span class="col2">
							<textarea name="content"></textarea>
						</span>
					</li>
					<li>
						<span class="col1">첨부파일 </span>
						<span class="col2"><input name="upfile" type="file"></span>
					</li>
				</ul>
				<ul class="buttons">
					<li><button type="button" onclick="check_input()">완료</button></li>
					<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
				</ul>
			</form>
		</div> <!-- board_box -->
	</section>
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>	
</html>