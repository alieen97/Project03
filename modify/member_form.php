<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="김혜련"/>
	<meta name="Keywords" content="김혜련,Kimhyelyeon, 포트폴리오, 김혜련 포트폴리오, portfolio, Hyelyeon's portfolio"/>
	<meta name="Description" content="김혜련의 포트폴리오 페이지 입니다"/>
	<title>회원가입</title>
	<link rel="stylesheet" href="../include/css/member.css"/>
	<link rel="stylesheet" href="../include/css/green_menu.css"/>
	<link rel="stylesheet" href="css/layout_menu.css"/>
	<link rel="icon" sizes="16x16" href="../include/images/green_pavi_ori.gif">
	<script src="../include/js/jquery-1.9.0.min.js"></script> 
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/menuActive.js"></script>
	<script src="../include/js/form_main.js"></script>
	<script src="js/script.js"></script>

	<script>
	function check_input()
	{
		if(!document.member_form.id.value.trim()){
			alert("아이디를 입력하세요!");
			document.member_form.id.focus();
			return;
		}
		if(!document.member_form.pass.value.trim()){
			alert("비밀번호를 입력하세요!");
			document.member_form.pass.focus();
			return;
		}
		if(!document.member_form.pass_contirm.value.trim()){
			alert("비밀번호확인을 입력하세요!");
			document.member_form.pass_contirm.focus();
			return;
		}
		if(!document.member_form.name.value.trim()){
			alert("이름을 입력하세요!");
			document.member_form.name.focus();
			return;
		}
		if(!document.member_form.email1.value.trim()){
			alert("이메일 주소를 입력하세요!");
			document.member_form.email1.focus();
			return;
		}
		if(!document.member_form.email2.value.trim()){
			alert("이메일 주소를 입력하세요!");
			document.member_form.email2.focus();
			return;
		}
		
		if(document.member_form.pass.value.trim() != document.member_form.pass_contirm.value.trim())
		{
			alert("비밀번호가 일치하지 않습니다. \n 다시 입력해 주세요!");
			document.member_form.pass.focus();
			// select()를 사용하여 블럭지정
			document.member_form.pass.select();
			return;
		}
      if(document.getElementById("pInput").value == "no"){
        alert("중복확인 버튼을 눌러 아이디 중복을 확인해주세요!"); 
        document.member_form.id.focus(); 
        // select()를 사용하여 블럭지정
        document.member_form.id.select(); 
        return;
      }else{
        document.member_form.submit(); 
	}

	function reset_form(){
		document.member_form.id.value = "";
		document.member_form.pass.value = "";
		document.member_form.pass_contirm.value = "";
		document.member_form.name.value = "";
		document.member_form.email1.value = "";
		document.member_form.email2.value = "";
		document.member_form.id.focus();
		return;
	}
	
	function check_id(){
		window.open("member_check_id.php?id=" + document.member_form.id.value,
			"IDcheck",
			"left=700, top=300, width=350, height=200, scrollbars=no, resizable-yes");
	}
	
	</script>

</head>
<body>
	<header class="cf">
		<?php include "../include/header.php";?>
	</header>
	<section>
		<div id="mainContent">
			<div id="joinBox">
				<form name="member_form" method="post" action="member_insert.php">
					<input type="hidden" id="pInput" value="no" name="check" />
					<h2>회원가입</h2>
					<div class="form id">
						<div class="col1"><span class="mfIm">*</span>아이디</div>
						<div class="col2">
							<input type="text" name="id" class="guideText" placeholder="아이디를 입력해주세요."/>
						</div>
						<div class="col3">
							<a href="#"><span class="checkId" onclick="check_id()">중복확인</span></a>
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="form">
						<div class="col1"><span class="mfIm">*</span>비밀번호</div>
						<div class="col2">
							<input type="password" name="pass" class="guideText" placeholder="비밀번호 입력"/>
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="form">
						<div class="col1"><span class="mfIm">*</span>비밀번호 확인</div>
						<div class="col2">
							<input type="password" name="pass_contirm" class="guideText" placeholder="비밀번호 확인"/>
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="form">
						<div class="col1"><span class="mfIm">*</span>이름</div>
						<div class="col2">
							<input type="text" name="name" class="guideText" placeholder="이름을 입력해주세요."/>
						</div>
					</div>
					<div class="clear"></div>
					
					<div class="form">
						<div class="col1"><span class="mfIm">*</span>이메일</div>
						<div class="col2">
							<input type="text" name="email1"/> @ <input type="text" name="email2"/>
						</div>
					</div>
					<div class="clear"></div>
					<div class="buttons">
						<span class="submit" onclick="check_input()">등록</span>
						<span class="cancle" onclick="reset_form()">취소</span>
					</div>
				</form>
			</div>
		</div>
	</section>
	<footer>
		<?php include "../include/footer.php";?>
	</footer>
</body>
</html>