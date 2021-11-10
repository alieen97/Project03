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
  <link rel="stylesheet" href="../include/css/member.css" />
  <script src="../include/js/menuActive.js"></script>
  <script src="../include/js/main.js"></script>
  <script type="text/javascript" src="../include/js/member_modify.js"></script>
</head>
<body>
  <header>
    <?php include "../include/header.php";?>
  </header>
<?php
  $con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
  $sql    = "select * from members where id='$userid'";
  $result = mysqli_query($con, $sql);
  $row    = mysqli_fetch_array($result);

  $pass = $row["pass"];
  $name = $row["name"];

  $email = explode("@", $row["email"]);
  $email1 = $email[0];
  $email2 = $email[1];

  mysqli_close($con);
?>
  <section>
        <div id="mainContent">
          <div id="joinBox">
            <form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
          <h2>회원 정보수정</h2>
              <div class="form id">
                <div class="col1"><span class="mfIm">*</span> 아이디</div>
                <div class="col2">
              <?=$userid?>
                </div>
              </div>
              <div class="clear"></div>
<?php
if ($userlevel == 1) {
        echo "<script>alert(\"level.1은 비밀번호를 수정할 수 없습니다!\");</script>";
          echo "  <div class='form'>
                <div class='col1'><span class='mfIm'>*</span> 비밀번호</div>
                <div class='col2'>
              <input type='password' name='pass' value='$pass' readonly />
                </div>
              </div>
              <div class='clear'></div>
              <div class='form'>
                <div class='col1'><span class='mfIm'>*</span> 비밀번호 확인</div>
                <div class='col2'>
              <input type='password' name='pass_confirm' value='$pass' readonly />
                </div>
              </div>
        ";
}else{
          echo "  <div class='form'>
                <div class='col1'><span class='mfIm'>*</span> 비밀번호</div>
                <div class='col2'>
              <input type='password' name='pass' value='$pass' />
                </div>
              </div>
              <div class='clear'></div>
              <div class='form'>
                <div class='col1'><span class='mfIm'>*</span> 비밀번호 확인</div>
                <div class='col2'>
              <input type='password' name='pass_confirm' value='$pass' />
                </div>
              </div>
        ";
}
?>
              <div class="clear"></div>
              <div class="form">
                <div class="col1"><span class="mfIm">*</span> 이름</div>
                <div class="col2">
              <input type="text" name="name" value="<?=$name?>">
                </div>
              </div>
              <div class="clear"></div>
              <div class="form email">
                <div class="col1"><span class="mfIm">*</span> 이메일</div>
                <div class="col2">
              <input type="text" name="email1" value="<?=$email1?>">@<input
                     type="text" name="email2" value="<?=$email2?>">
                </div>
              </div>
              <div class="clear"></div>
              <div class="buttons">
                <span class="submit" onclick="check_input()">등록</span>
                <span class="cancle" onclick="reset_form()">취소</span>
              </div>
            </form>
          </div> <!-- join_box -->
        </div> <!-- main_content -->
  </section>
  <footer>
      <?php include "../include/footer.php";?>
    </footer>
</body>
</html>