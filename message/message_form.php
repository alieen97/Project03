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
  <link rel="stylesheet" href="../include/css/message_form.css" />
  <script src="../include/js/menuActive.js"></script>
  <script src="../include/js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../main/css/message.css" />
  <script>
    function check_input() {
        if (!document.message_form.rv_id.value.trim())
        {
            alert("수신 아이디를 입력하세요!");
            document.message_form.rv_id.focus();
            return;
        }
        if (!document.message_form.subject.value.trim())
        {
            alert("제목을 입력하세요!");
            document.message_form.subject.focus();
            return;
        }
        if (!document.message_form.content.value.trim())
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
<?php
  if (!$userid )
  {
    echo("<script>
        alert('로그인 후 이용해주세요!');
        location.href='../login/index.php'
        // history.go(-1);
        </script>
      ");
    exit;
  }
?>
<section>
    <div id="messageBox">
      <h2 id="writeTitle">
          쪽지 보내기
	  </h2>
    <ul class="topButtons cf">
        <li><span><a href="message_box.php?mode=rv" class="rv">수신 쪽지함 </a></span></li>
        <li><span><a href="message_box.php?mode=send" class="send">송신 쪽지함</a></span></li>
    </ul>
      <form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
        <div id="writeMsg">
            <ul>
              <li>
                <span class="col1"><span class="mfIm">*</span> 보내는 사람 : </span>
                <span class="col2"><?=$userid?></span>
              </li> 
              <li class="id">
                <span class="col1"><span class="mfIm">*</span> 수신 아이디 : </span>
                <span class="col2"><input name="rv_id" type="text"></span>
              </li> 
                <li class="title">
                  <span class="col1"><span class="mfIm">*</span> 제목 : </span>
                  <span class="col2"><input name="subject" type="text"></span>
                </li>       
                <li id="textArea"> 
                  <span class="col1"><span class="mfIm">*</span> 내용</span>
                  <span class="col2 cf">
                    <textarea name="content"></textarea>
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