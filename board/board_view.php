<!DOCTYPE html>
<html>
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
</head>
<body> 
<header>
	<?php include "../include/header.php";?>
</header>  
<section>
	<div id="boardBox">
		<h3 class="title">
			게시판 > 내용보기
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
		<ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
			</li>
			<li>
				<?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "../data/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
						<a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
					}
				?>
				<?=$content?>
			</li>		
		</ul>
		<ul class="buttons">
				<li><button onclick="location.href='index.php?page=<?=$page?>'">목록</button></li>
				<li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
				<li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
				<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
		</ul>
	</div> <!-- board_box -->
</section> 
<footer>
	<?php include "../include/footer.php";?>
</footer>
</body>
</html>
