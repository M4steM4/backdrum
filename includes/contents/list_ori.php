<div class="container not_main">
	<div id="login_box">
		<?require_once('login.php');?>
	</div>

	<div class="real_content">
		<?if($PMLIST['BOARD'] != 'newmeet'){?>
		<div class="board_title selected" id="shop_list">업소 검색</div>
		<div class="board_title" id="investor_epilogue">검증단 후기게시판</div>
		<?}?>
		<div class="board_title<?if($PMLIST['BOARD'] == 'newmeet'){?> selected<?}?>" id="epilogue">후기게시판</div>
		<div class="board_title" id="free">자유게시판</div>
		<?if($PMLIST['BOARD'] == 'newmeet'){?><div class="board_title no_sel" style="width:377px; cursor:default;"></div><?}?>
	</div>
	
	<div class="search_content">
		<div class="sel"><select id="category" style="color:red; font-weight:bold;">
			<option value="all">전체</option>
			<?$category_qry = mysql_query("SELECT * FROM category");
			if(mysql_num_rows($category_qry) > 0){
				while($row = mysql_fetch_array($category_qry)){?>
			<option value="<?=$row['code']?>"<?if($row['code'] == $PMLIST['BOARD']){?> selected<?}?>><?=$row['title']?></option>
				<?}
			}?>
		</select></div>
		<div class="sel"><select id="place1" style="color:red; font-weight:bold;">
			<option value="all">도/시 선택</option>
			<?$place_qry = mysql_query("SELECT * FROM place1");
			if(mysql_num_rows($place_qry) > 0){
				while($row = mysql_fetch_array($place_qry)){?>
			<option value="<?=$row['idx']?>"><?=$row['title']?></option>
				<?}
			}?>
		</select></div>
		<div class="sel"><select id="place2" style="color:red; font-weight:bold;">
			<option value="all">시/구/군 선택</option>
		</select></div>
		<input class="search_txt" id="search_txt" placeholder="검색어를 입력하세요.">
		<div class="search_btn">검색</div>
	</div>

	<?$PMLIST['BOARD']?>
	<div class="recommend_shop board">
		<div class="shop_article">
			<div class="thumb"><img src="/images/thumb/main1.png"></div>
			<div class="text">
				<div class="bold">[미친가격]90분8만오후2</div>
				<div>업소명:<span class="shop">[일산플로아로마]</span></div>
				<div class="description">100% 서비스 타임 10분 제공 정말 드려요.ㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇsdfsdfsdfsdf</div>
				<div class="bold">[하드&룸] 서울-역삼동</div>
			</div>
		</div>
		<div class="shop_article">
			<div class="thumb"><img src="/images/thumb/main1.png"></div>
			<div class="text">
				<div class="bold">[미친가격]90분8만오후2</div>
				<div>업소명:<span class="shop">[일산플로아로마]</span></div>
				<div class="description">100% 서비스 타임 10분 제공 정말 드려요.ㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇsdfsdfsdfsdf</div>
				<div class="bold">[하드&룸] 서울-역삼동</div>
			</div>
		</div>
		<div class="shop_article">
			<div class="thumb"><img src="/images/thumb/main1.png"></div>
			<div class="text">
				<div class="bold">[미친가격]90분8만오후2</div>
				<div>업소명:<span class="shop">[일산플로아로마]</span></div>
				<div class="description">100% 서비스 타임 10분 제공 정말 드려요.ㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇㄹㄴㅇsdfsdfsdfsdf</div>
				<div class="bold">[하드&룸] 서울-역삼동</div>
			</div>
		</div>
	</div>

	<div class="best_article">
		<div class="article">
			<div class="thumb"><img src="/images/thumb/board_recommend.png"></div>
			<img src="/images/list/recommend.png" class="tag">
			<div class="text">
				<div class="title">'난방 투사' 김부선 "난방비리 폭로가 명예회손?" 언론 검찰 어쩌고 저쩌고</div>
				<div class="description">[ <b>서울-핸플</b> ] '난방 투사' 김부선 "난방비리 폭로가 명예회손?" 언론 검찰 어쩌고 저쩌고 sdfsfeseㄹㄴㄷㄹㄴㄷㄹㄴㄷ허ㅏㄴㄹ이하ㅓ미ㅏㅎ어미ㅏㅇㄶ 니러 나ㅣㄷ러니ㅏ더 미ㅏ호ㅓ미ㅏㅇ허미ㅏ ㄴ엄지ㅏ덯 sefskskkgkgkskgks kske ksekgkskegkseg ksek sek kseg k</div>
			</div>
			<div class="score">조회수&nbsp;&nbsp;<b>1112</b>,&nbsp;&nbsp;&nbsp;추천&nbsp;&nbsp;<span>519</span><br/><b>2014.11.18 10:19</b></div>
		</div>
		<div class="article">
			<div class="thumb"><img src="/images/thumb/board_recommend.png"></div>
			<img src="/images/list/recommend.png" class="tag">
			<div class="text">
				<div class="title">'난방 투사' 김부선 "난방비리 폭로가 명예회손?" 언론 검찰 어쩌고 저쩌고</div>
				<div class="description">[ <b>서울-핸플</b> ] '난방 투사' 김부선 "난방비리 폭로가 명예회손?" 언론 검찰 어쩌고 저쩌고 sdfsfeseㄹㄴㄷㄹㄴㄷㄹㄴㄷ허ㅏㄴㄹ이하ㅓ미ㅏㅎ어미ㅏㅇㄶ 니러 나ㅣㄷ러니ㅏ더 미ㅏ호ㅓ미ㅏㅇ허미ㅏ ㄴ엄지ㅏ덯 sefskskkgkgkskgks kske ksekgkskegkseg ksek sek kseg k</div>
			</div>
			<div class="score">조회수&nbsp;&nbsp;<b>1112</b>,&nbsp;&nbsp;&nbsp;추천&nbsp;&nbsp;<span>519</span><br/><b>2014.11.18 10:19</b></div>
		</div>
		<div class="article">
			<div class="thumb"><img src="/images/thumb/board_recommend.png"></div>
			<img src="/images/list/recommend.png" class="tag">
			<div class="text">
				<div class="title">'난방 투사' 김부선 "난방비리 폭로가 명예회손?" 언론 검찰 어쩌고 저쩌고</div>
				<div class="description">[ <b>서울-핸플</b> ] '난방 투사' 김부선 "난방비리 폭로가 명예회손?" 언론 검찰 어쩌고 저쩌고 sdfsfeseㄹㄴㄷㄹㄴㄷㄹㄴㄷ허ㅏㄴㄹ이하ㅓ미ㅏㅎ어미ㅏㅇㄶ 니러 나ㅣㄷ러니ㅏ더 미ㅏ호ㅓ미ㅏㅇ허미ㅏ ㄴ엄지ㅏ덯 sefskskkgkgkskgks kske ksekgkskegkseg ksek sek kseg k</div>
			</div>
			<div class="score">조회수&nbsp;&nbsp;<b>1112</b>,&nbsp;&nbsp;&nbsp;추천&nbsp;&nbsp;<span>519</span><br/><b>2014.11.18 10:19</b></div>
		</div>
	</div>

	<img class="mid_desc board" src="/images/common/description.png">

	<script>
	$(document).ready(function(){
		$('#place1').change(function(){
			$.post('/includes/ajax_loads/common.php', {'time':fetch_unix_timestamp(), 'proc':'place2', 'idx':$(this).find('option:selected').val()}, function(data){
				$('#place2').html(data);
			});
		});
	});
	</script>

	<div class="real_content" id="ajax_contents"></div>
</div>

<script>
var ajax_php = '<?if($PMLIST['BOARD'] != 'newmeet'){?>shop<?}else{?>board<?}?>';
var board = '<?=$PMLIST['BOARD']?>';
var type = <?if($PMLIST['BOARD'] != 'newmeet'){?>null<?}else{?>'epilogue'<?}?>;
var place1 = 'all'; var place2 = 'all';
var search = '';
var page = 1;
function view_list(func){
	var func = func || null;
	$.post('/includes/ajax_loads/'+ajax_php+'.php', {'time':timestamp, 'proc':'list', 'board':board, 'type':type, 'place1':place1, 'place2':place2, 'search':search, 'page':page}, function(data){
		$('#ajax_contents').html(data);

		/* 1:1 문의 열리는 형태
		$('tr[idx]').click(function(){
			$('tr.opened[idx='+$('tr.selected').attr('idx')+']').not("[idx="+$(this).attr('idx')+"]").hide();
			$('tr.selected').removeClass('selected');
			$('tr.opened[idx='+$(this).attr('idx')+']').toggle();
			if($('tr.opened[idx='+$(this).attr('idx')+']').is(':visible')) $('tr[idx='+$(this).attr('idx')+']:not(.opened)').addClass('selected');
		});*/

		$('.paging span').click(function(){
			page = $(this).text();
			view_list();
		});

		$('.page_prev').click(function(){
			if(page != 1) page--;
			view_list();
		});

		$('.page_next').click(function(){
			page++;
			view_list();
		});

		if(func != null) func();
	});
}
$(document).ready(function(){
	view_list(function(){
		/* 1:1 문의 열리는 형태
		<?if($PMLIST['IDX'] > 0){?>$('tr[idx=<?=$PMLIST['IDX']?>]:not(.opened)').click().focus();<?}?>*/
	});
	$('.search_btn').click(function(){
		/*if($('#place1').find('option:selected').val() == 'none'){
			alert('도/시를 선택해주세요.');
			$('#place1').focus();
			return false;
		}
		if($('#place2').find('option:selected').val() == 'none'){
			alert('시/구/군을 선택해주세요.');
			$('#place2').focus();
			return false;
		}*/
		board = $('#category').find('option:selected').val();
		place1 = $('#place1').find('option:selected').val();
		place2 = $('#place2').find('option:selected').val();
		search = $('#search_txt').val();

		view_list();
	});
	$('.board_title:not(.no_sel)').click(function(){
		$('.board_title').removeClass('selected');
		$(this).addClass('selected');

		page = 1;
		switch($(this).attr('id')){
			case 'shop_list':
				ajax_php = 'shop';
				type = null;
				view_list();
				break;
			case 'investor_epilogue':
				ajax_php = 'board';
				type = 'investor';
				view_list();
				break;
			case 'epilogue':
				ajax_php = 'board';
				type = 'epilogue';
				view_list();
				break;
			case 'free':
				location.href='/?inc=community';
				break;
		}
	});
});
</script>