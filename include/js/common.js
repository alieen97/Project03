<!-- 메뉴 -->
$(function(){
	/* 로그인임펙트 */
	/* 헤더순환배너 */
	var mnBanner=$('.brandBanner');
	var mncurrent=0;
	var mntimer;
	
	function muBanMover(tg,start,end){
		tg.css('top',start).stop().animate({top:end},500);
	};
	mnMoving();
	function mnMoving(){
		mntimer=setInterval(function(){
			var prev=mnBanner.eq(mncurrent);
			mncurrent++;
			if(mncurrent>=mnBanner.size()){mncurrent=0};
			muBanMover(prev,'0%','-100%');
			var next=mnBanner.eq(mncurrent);
			muBanMover(next,'100%','0%');
		},2000);
	};
	$('.brandBanner').hover(
		function(){
			clearInterval(mntimer);
		},
		function(){
			mnMoving();
		}
	);
	

});