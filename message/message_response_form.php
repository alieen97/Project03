<!DOCTYPE html>
<html>
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
	<script>
	  function check_input() {
			if (!document.message_form.subject.value)
			{
				alert("제목을 입력하세요!");
				document.message_form.subject.focus();
				return;
			}
			if (!document.message_form.content.value)
			{
				alert("내용을 입력하세요!");    
				document.message_form.content.focus();
				return;
			}
			document.message_form.submit();
		}
	</script>
</head>
<body> 
<header>
	<?php include "../include/header.php";?>
</header>  
<section>
 	<div id="messageReBox">
    <h3 id="writeTitle">
			답변 쪽지 보내기
		</h3>
<?php
	$num  = $_GET["num"];

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from message where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id      = $row["send_id"];
	$rv_id      = $row["rv_id"];
	$subject    = $row["subject"];
	$content    = $row["content"];

	$subject = "RE: ".$subject; 

	$content = "> ".$content; 
	$content = str_replace("\n", "\n>", $content);
	$content = "\n\n\n-----------------------------------------------\n".$content;

	$result2 = mysqli_query($con, "select name from members where id='$send_id'");
	$record = mysqli_fetch_array($result2);
	$send_name    = $record["name"];
?>		
    <form  name="messageForm" method="post" action="message_insert.php?send_id=<?=$userid?>">
    	<input type="hidden" name="rv_id" value="<?=$send_id?>">
    	<div id="writeMsg">
				<ul>
					<li>
						<span class="col1">보내는 사람 : </span>
						<span class="col2"><?=$userid?></span>
					</li>	
					<li>
						<span class="col1">수신 아이디 : </span>
						<span class="col2"><?=$send_name?>(<?=$send_id?>)</span>
					</li>	
					<li class="id">
						<span class="col1">제목 : </span>
						<span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
					</li>	    	
					<li id="textArea">	
						<span class="col1">글 내용 : </span>
						<span class="col2">
							<textarea name="content"><?=$content?></textarea>
						</span>
					</li>
				</ul>
				<button type="button" onclick="check_input()">보내기</button>
    	</div>
    </form>
	</div> <!-- message_box -->
</section> 
<footer>
	<?php include "../include/footer.php";?>
</footer>
</body>
</html>