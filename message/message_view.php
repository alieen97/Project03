<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8" />
  <meta name="Generator" content="Notepad++"/>
  <meta name="Author" content="김혜련"/>
  <meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
  <meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
  <title>그린컴퓨터아카데미</title>
  <link rel="icon" sizes="16x16" href="../include/images/green_pavi_ori.gif"> 
  <script src="../include/js/jquery-1.10.2.min.js"></script>
  <link rel="stylesheet" href="../include/css/green_menu.css"/>
  <link rel="stylesheet" href="../include/css/message_form.css" />
  <script src="../include/js/menuActive.js"></script>
  <script src="../include/js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../include/css/message.css" />
</head>
<body>
	<header>
		<?php include "../include/header.php";?>
	</header>
	<section>
		<div id="messageBox">
			<h3 class="title">
<?php
	$mode = $_GET["mode"];
	$num = $_GET["num"];

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from message where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id = $row["send_id"];
	$rv_id = $row["rv_id"];
	$regist_day = $row["regist_day"];
	$subject = $row["subject"];
	$content = $row["content"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	if($mode == "send")
		$result2 = mysqli_query($con, "select name from members where id='$rv_id'");
	else
		$result2 = mysqli_query($con, "select name from members where id='$send_id'");

	$record = mysqli_fetch_array($result2);
	$msg_name = $record["name"];

	if($mode == "send")
		echo "송신 쪽지함 > 내용보기";
	else
		echo "수신 쪽지함 > 내용보기";
?>
			</h3>
			<ul id="viewContent">
				<li>
					<span class="col1"><b>제목 : </b><?=$subject?></span>
					<span class="col2"><?=$msg_name?> | <?=$regist_day?></span>
				</li>
				<li>
					<?=$content?>
				</li>
			</ul>
			<ul class="buttons">
				<li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
				<li><button onclick="location.href='message_box.php?mode=send'">송신 쪽지함</button></li>
				<li><button onclick="location.href='message_response_form.php?num=<?=$num?>'">답변쪽지</button></li>
				<li><button onclick="location.href='message_delete.php?num=<?=$num?>&mode=<?=$mode?>'">삭제</button></li>
			</ul>
		</div> <!-- message_box -->
	</section>
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>	
</html>