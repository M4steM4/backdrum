<?
define(PMSYSTEM_CHECK,"!#DSS@#!SAADTUUF&&%&*");

include('../system/function.php');
include('../system/system.php');

header('P3P: CP="CAO PSA CONi OTR OUR DEM ONL"');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Pragma: no-cache");
header("Cache-Control: no-store,no-cache,must-revalidate");
header('Cache-Control: post-check=0, pre-check=0', FALSE);
?>
<!DOCTYPE HTML>
<html lang="kr">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>업소다나와</title>
<meta name="Keywords" content="업소다나와,다나와,업소,키스방,안마방,건마,섹마,섹스" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<!-- 구 버전의 인터넷 익스플로러에서 HTML5 태그를 인식하게 합니다. -->
<!--[if lte IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 9]>
<script src="/js/pie/PIE_IE9.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<script src="/js/pie/PIE_IE678.js"></script>
<![endif]-->
<script src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/jquery_plugin/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="/js/common.js"></script>
<script src="/js/placeholders.min.js"></script>

<style>
html {min-width:619px;}
body {background-color:#fff; min-width:619px; min-height:920px;}
.popup_content {overflow:hidden; width:619px; min-height:920px;}
.search_form {margin-left:21px; margin-top:30px; width:577px; overflow:hidden;}
.search_form img {float:left;}
.codetitle {cursor:pointer;}
.sel {width:136px; height:30px; background:#fff; border:1px solid #ccc; color:#5a5a5a; text-align:left; line-height:25px; font-stretch:condensed; overflow:hidden; float:left;}
.sel select {width:157px; height:30px; padding-left:10px; border:0px; background-image:url(/images/write/drop_down.png); background-repeat:no-repeat; background-position:112px 0px; background-color:#fff; float:left;}
.input_box {margin-right:22px; width:158px; height:30px; padding:0 10px; line-height:30px; margin-left:5px; margin-right:18px; border:1px solid #ccc; float:left;}
img.search_btn {float:right; cursor:pointer;}
.data_tab {width:308px; height:27px; line-height:27px; cursor:pointer; text-align:center; border:1px solid #ccc; background-color:#eaeaea; float:left; margin-top:29px;}
.on {background-color:#f4f4f4;}
#search_tab span {color:#d90000; font-weight:600;}
#select_done, #upload_done {background-image:url(/images/common/pink_btn.png); width:224px; height:50px; line-height:50px; font-weight:600; color:#fff; cursor:pointer; text-align:center;}
.tab_content {width:100%; overflow:hidden;}
.tab_content .done_btn {position:relative; margin:30px auto 0;}
table tr th {height:32px; text-align:center; background:#f9f9f9; border-bottom:1px solid #ccc;}
table tr td {height:32px; border-bottom:1px solid #ccc; text-align:center;}
table tr td.shop_name {padding:0 15px; text-align:left;}
.insert_form {border-bottom:1px solid #ccc;}
.insert_form .insert_outer {margin-left:21px; margin-top:30px; width:577px; overflow:hidden; padding-bottom:30px;}
.insert_form .insert_outer span {font-weight:600; font-size:16px; color:#000;}
.insert_form .insert_outer img {float:left;}

.input {line-height:32px; height:32px; margin-bottom:11px;}
input {width:500px; height:30px; padding:0 10px; line-height:30px; margin-right:18px; border:1px solid #ccc;}

::-webkit-input-placeholder { color:#ababab; }
::-moz-placeholder { color:#ababab; } /* firefox 19+ */
:-ms-input-placeholder { color:#ababab; } /* ie */
:-moz-placeholder { color:#ababab; }

.all_time_check {position:relative; display:inline-block; padding-left:20px; height:30px;}
.all_time_check input[id="all_time"] {display: none;}
.all_time_check input[id="all_time"] + label {float:left; margin-top:10px; width:11px; height:11px; background:#fff; border:1px solid #ccc; cursor:pointer;}
.all_time_check input[id="all_time"] + label + label {float:left; width:70px; margin-left:2px; margin-right:20px;}
.all_time_check input[id="all_time"]:checked + label:after {content:'\2714'; font-size:11px; position:absolute; top:2px;}
</style>
</head>

<body>
<div class="popup_content">

<img src="/images/shop_upload/popup_top.png" style="border-bottom:1px solid #ccc;" />
<div class="search_form">
	<div style="overflow:hidden;">
		<div class="shop_sch"><img id="shop_sch1" class="codetitle on" src="/images/epilogue/select_shop1_on.png" placeholder="예) 강남 OOO" /><img id="shop_sch2" class="codetitle" src="/images/epilogue/select_shop2_off.png" placeholder="예) O_3_1427350581623" /><input type="text" id="shop" class="input_box" placeholder="예) 강남 OOO" maxlength="30">
		<img src="/images/shop_upload/category.png"><div class="sel"><select id="category">
			<option value="all">전체</option>
			<?$category_qry = mysql_query("SELECT * FROM category");
			if(mysql_num_rows($category_qry) > 0){
				while($row = mysql_fetch_array($category_qry)){?>
			<option value="<?=$row['idx']?>"><?=$row['title']?></option>
				<?}
			}?>
		</select></div></div>
	</div>

	<div style="margin-top:13px; overflow:hidden;">
		<img src="/images/shop_upload/place1.png">
		<div class="sel" style="margin-right:13px;"><select id="place1">
			<option value="all">도/시 선택</option>
			<?$place_qry = mysql_query("SELECT * FROM place1");
			if(mysql_num_rows($place_qry) > 0){
				while($row = mysql_fetch_array($place_qry)){?>
			<option value="<?=$row['idx']?>"><?=$row['title']?></option>
				<?}
			}?>
		</select></div>

		<img src="/images/shop_upload/place2.png">
		<div class="sel"><select id="place2">
			<option value="all">시/구/군 선택</option>
		</select></div>
		<img id="search_btn" class="search_btn" src="/images/common/search_btn.png" />
	</div>
</div>

<div style="overflow:hidden;">
	<div id="search_tab" class="data_tab on">검색 결과 [ <span>0</span> ] 건</div><div id="new_shop" class="data_tab" style="border-left:0;">업소 정보 수동 입력</div>
</div>

<div id="search_tab_content" class="tab_content">
	<div id="ajax_result" style="padding-bottom:20px;">
		<table>
			<thead>
				<tr>
					<th style="width:90px;">카테고리</th>
					<th style="width:70px;">지역</th>
					<th>업소명</th>
					<th style="width:110px;">연락처</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="4">검색을 해주세요.</td>
				</tr>
			</tbody>
		</table>
		<div class="paging_outer"></div>
	</div>
	<div id="select_done" class="done_btn">선택하기</div>
</div>

<div id="new_shop_content" class="tab_content" style="display:none;">
	<div class="insert_form">
		<div class="insert_outer">
			<span>등록할 업소의 카테고리 및 지역을 입력해주세요.</span>
			<div style="margin-top:20px; overflow:hidden;">
				<img src="/images/shop_upload/category.png"><div class="sel"><select id="insert_category">
					<?$category_qry = mysql_query("SELECT * FROM category");
					if(mysql_num_rows($category_qry) > 0){
						while($row = mysql_fetch_array($category_qry)){?>
					<option value="<?=$row['idx']?>"><?=$row['title']?></option>
						<?}
					}?>
				</select></div>
			</div>
			<div style="margin-top:13px; margin-bottom:30px; overflow:hidden;">
				<img src="/images/shop_upload/place.png"><div class="sel" style="border-right:0;"><select id="insert_place1">
					<option value="none">도/시 선택</option>
					<?$place_qry = mysql_query("SELECT * FROM place1");
					if(mysql_num_rows($place_qry) > 0){
						while($row = mysql_fetch_array($place_qry)){?>
					<option value="<?=$row['idx']?>"><?=$row['title']?></option>
						<?}
					}?>
				</select></div>
				<div class="sel"><select id="insert_place2">
					<option value="none">시/구/군 선택</option>
				</select></div>
				<input type="text" id="insert_place3" placeholder="예) OO번지 또는 역삼역 2번 출구 앞" maxlength=50 style="width:198px; margin:0; float:right;" class="input_box">
			</div>
			<span>업소명 및 업소 소개를 입력해주세요.</span>
			<div style="margin-top:20px; overflow:hidden;">
				<div class="input"><input type="text" id="shop_name" placeholder="업소명을 입력해주세요." maxlength=50> <font id="shop_name_cnt">0</font>/50자</div>
			</div>
			<div style="margin-top:0px; margin-bottom:20px; overflow:hidden;">
				<div class="input"><input type="text" id="introduce" placeholder="간략한 업소 소개를 입력해주세요." maxlength=50> <font id="introduce_cnt">0</font>/50자</div>
			</div>
			<script>
			$(document).ready(function(){
				$('input#shop_name').keypress(function(){
					$('#shop_name_cnt').text($(this).val().length);
				});
				$('input#shop_name').keyup(function(){
					$('#shop_name_cnt').text($(this).val().length);
				});
				$('input#introduce').keypress(function(){
					$('#introduce_cnt').text($(this).val().length);
				});
				$('input#introduce').keyup(function(){
					$('#introduce_cnt').text($(this).val().length);
				});
			});
			</script>
			<span>상세 정보를 입력해주세요.</span>
			<div class="input shop_upload" style="margin-top:20px;"><img src="/images/shop_upload/time.png"><div class="sel" style="width:124px;"><select id="open_time" style="background-position-x:100px;">
				<option value="1800">오후 6시</option>
				<option value="1815">오후 6시 15분</option>
				<option value="1830">오후 6시 30분</option>
				<option value="1845">오후 6시 45분</option>
				<option value="1900">오후 7시</option>
				<option value="1915">오후 7시 15분</option>
				<option value="1930">오후 7시 30분</option>
				<option value="1945">오후 7시 45분</option>
				<option value="2000">오후 8시</option>
				<option value="2015">오후 8시 15분</option>
				<option value="2030">오후 8시 30분</option>
				<option value="2045">오후 8시 45분</option>
				<option value="2100">오후 9시</option>
				<option value="2115">오후 9시 15분</option>
				<option value="2130">오후 9시 30분</option>
				<option value="2145">오후 9시 45분</option>
				<option value="2200">오후 10시</option>
				<option value="2215">오후 10시 15분</option>
				<option value="2230">오후 10시 30분</option>
				<option value="2245">오후 10시 45분</option>
				<option value="2300">오후 11시</option>
				<option value="2315">오후 11시 15분</option>
				<option value="2330">오후 11시 30분</option>
				<option value="2345">오후 11시 45분</option>
				<option value="0">밤 12시</option>
				<option value="15">밤 12시 15분</option>
				<option value="30">밤 12시 30분</option>
				<option value="45">밤 12시 45분</option>
				<option value="100">오전 1시</option>
				<option value="115">오전 1시 15분</option>
				<option value="130">오전 1시 30분</option>
				<option value="145">오전 1시 45분</option>
				<option value="200">오전 2시</option>
				<option value="215">오전 2시 15분</option>
				<option value="230">오전 2시 30분</option>
				<option value="245">오전 2시 45분</option>
				<option value="300">오전 3시</option>
				<option value="315">오전 3시 15분</option>
				<option value="330">오전 3시 30분</option>
				<option value="345">오전 3시 45분</option>
				<option value="400">오전 4시</option>
				<option value="415">오전 4시 15분</option>
				<option value="430">오전 4시 30분</option>
				<option value="445">오전 4시 45분</option>
				<option value="500">오전 5시</option>
				<option value="515">오전 5시 15분</option>
				<option value="530">오전 5시 30분</option>
				<option value="545">오전 5시 45분</option>
				<option value="600">오전 6시</option>
				<option value="615">오전 6시 15분</option>
				<option value="630">오전 6시 30분</option>
				<option value="645">오전 6시 45분</option>
				<option value="700">오전 7시</option>
				<option value="715">오전 7시 15분</option>
				<option value="730">오전 7시 30분</option>
				<option value="745">오전 7시 45분</option>
				<option value="800">오전 8시</option>
				<option value="815">오전 8시 15분</option>
				<option value="830">오전 8시 30분</option>
				<option value="845">오전 8시 45분</option>
				<option value="900">오전 9시</option>
				<option value="915">오전 9시 15분</option>
				<option value="930">오전 9시 30분</option>
				<option value="945">오전 9시 45분</option>
				<option value="1000">오전 10시</option>
				<option value="1015">오전 10시 15분</option>
				<option value="1030">오전 10시 30분</option>
				<option value="1045">오전 10시 45분</option>
				<option value="1100">오전 11시</option>
				<option value="1115">오전 11시 15분</option>
				<option value="1130">오전 11시 30분</option>
				<option value="1145">오전 11시 45분</option>
				<option value="1200">낮 12시</option>
				<option value="1215">낮 12시 15분</option>
				<option value="1230">낮 12시 30분</option>
				<option value="1245">낮 12시 45분</option>
				<option value="1300">오후 1시</option>
				<option value="1315">오후 1시 15분</option>
				<option value="1330">오후 1시 30분</option>
				<option value="1345">오후 1시 45분</option>
				<option value="1400">오후 2시</option>
				<option value="1415">오후 2시 15분</option>
				<option value="1430">오후 2시 30분</option>
				<option value="1445">오후 2시 45분</option>
				<option value="1500">오후 3시</option>
				<option value="1515">오후 3시 15분</option>
				<option value="1530">오후 3시 30분</option>
				<option value="1545">오후 3시 45분</option>
				<option value="1600">오후 4시</option>
				<option value="1615">오후 4시 15분</option>
				<option value="1630">오후 4시 30분</option>
				<option value="1645">오후 4시 45분</option>
				<option value="1700">오후 5시</option>
				<option value="1715">오후 5시 15분</option>
				<option value="1730">오후 5시 30분</option>
				<option value="1745">오후 5시 45분</option>
			</select></div><div style="float:left; width:35px;"> 부터 </div><div class="sel" style="width:124px;"><select id="close_time" style="background-position-x:100px;">
				<option value="600">오전 6시</option>
				<option value="615">오전 6시 15분</option>
				<option value="630">오전 6시 30분</option>
				<option value="645">오전 6시 45분</option>
				<option value="700">오전 7시</option>
				<option value="715">오전 7시 15분</option>
				<option value="730">오전 7시 30분</option>
				<option value="745">오전 7시 45분</option>
				<option value="800">오전 8시</option>
				<option value="815">오전 8시 15분</option>
				<option value="830">오전 8시 30분</option>
				<option value="845">오전 8시 45분</option>
				<option value="900">오전 9시</option>
				<option value="915">오전 9시 15분</option>
				<option value="930">오전 9시 30분</option>
				<option value="945">오전 9시 45분</option>
				<option value="1000">오전 10시</option>
				<option value="1015">오전 10시 15분</option>
				<option value="1030">오전 10시 30분</option>
				<option value="1045">오전 10시 45분</option>
				<option value="1100">오전 11시</option>
				<option value="1115">오전 11시 15분</option>
				<option value="1130">오전 11시 30분</option>
				<option value="1145">오전 11시 45분</option>
				<option value="1200">낮 12시</option>
				<option value="1215">낮 12시 15분</option>
				<option value="1230">낮 12시 30분</option>
				<option value="1245">낮 12시 45분</option>
				<option value="1300">오후 1시</option>
				<option value="1315">오후 1시 15분</option>
				<option value="1330">오후 1시 30분</option>
				<option value="1345">오후 1시 45분</option>
				<option value="1400">오후 2시</option>
				<option value="1415">오후 2시 15분</option>
				<option value="1430">오후 2시 30분</option>
				<option value="1445">오후 2시 45분</option>
				<option value="1500">오후 3시</option>
				<option value="1515">오후 3시 15분</option>
				<option value="1530">오후 3시 30분</option>
				<option value="1545">오후 3시 45분</option>
				<option value="1600">오후 4시</option>
				<option value="1615">오후 4시 15분</option>
				<option value="1630">오후 4시 30분</option>
				<option value="1645">오후 4시 45분</option>
				<option value="1700">오후 5시</option>
				<option value="1715">오후 5시 15분</option>
				<option value="1730">오후 5시 30분</option>
				<option value="1745">오후 5시 45분</option>
				<option value="1800">오후 6시</option>
				<option value="1815">오후 6시 15분</option>
				<option value="1830">오후 6시 30분</option>
				<option value="1845">오후 6시 45분</option>
				<option value="1900">오후 7시</option>
				<option value="1915">오후 7시 15분</option>
				<option value="1930">오후 7시 30분</option>
				<option value="1945">오후 7시 45분</option>
				<option value="2000">오후 8시</option>
				<option value="2015">오후 8시 15분</option>
				<option value="2030">오후 8시 30분</option>
				<option value="2045">오후 8시 45분</option>
				<option value="2100">오후 9시</option>
				<option value="2115">오후 9시 15분</option>
				<option value="2130">오후 9시 30분</option>
				<option value="2145">오후 9시 45분</option>
				<option value="2200">오후 10시</option>
				<option value="2215">오후 10시 15분</option>
				<option value="2230">오후 10시 30분</option>
				<option value="2245">오후 10시 45분</option>
				<option value="2300">오후 11시</option>
				<option value="2315">오후 11시 15분</option>
				<option value="2330">오후 11시 30분</option>
				<option value="2345">오후 11시 45분</option>
				<option value="0">밤 12시</option>
				<option value="15">밤 12시 15분</option>
				<option value="30">밤 12시 30분</option>
				<option value="45">밤 12시 45분</option>
				<option value="100">오전 1시</option>
				<option value="115">오전 1시 15분</option>
				<option value="130">오전 1시 30분</option>
				<option value="145">오전 1시 45분</option>
				<option value="200">오전 2시</option>
				<option value="215">오전 2시 15분</option>
				<option value="230">오전 2시 30분</option>
				<option value="245">오전 2시 45분</option>
				<option value="300">오전 3시</option>
				<option value="315">오전 3시 15분</option>
				<option value="330">오전 3시 30분</option>
				<option value="345">오전 3시 45분</option>
				<option value="400">오전 4시</option>
				<option value="415">오전 4시 15분</option>
				<option value="430">오전 4시 30분</option>
				<option value="445">오전 4시 45분</option>
				<option value="500">오전 5시</option>
				<option value="515">오전 5시 15분</option>
				<option value="530">오전 5시 30분</option>
				<option value="545">오전 5시 45분</option>
			</select></div><div style="float:left; width:35px;"> 까지 </div><div class="all_time_check"><input type="checkbox" id="all_time"><label id="label_all_time" for="all_time"></label> <label for="label_all_time"><div style="float:left; width:100px; padding-left:5px;">24시간 영업</div></label></div></div>
			<script>
			$(document).ready(function(){
				$('#all_time').change(function(){
					if($(this).is(':checked')){
						$('select#open_time,select#close_time').prop('disabled',true);
					} else {
						$('select#open_time,select#close_time').prop('disabled',false);
					}
				});
			});
			</script>
			<div class="input"><img src="/images/shop_upload/price.png"><input type="text" id="price" style="width:335px;" maxlength=50></div>
			<div class="input"><img src="/images/shop_upload/tel.png"><input type="text" id="tel" style="width:335px;" maxlength=50></div>
			<div class="input"><img src="/images/shop_upload/email.png"><input type="text" id="email" style="width:335px;" maxlength=50></div>
		</div>
	</div>
	<div id="upload_done" class="done_btn">등록하기</div>
</div>

</div>
</body>
<script>


var page = 1;
var type = '';
var search = '';
var category = '';
var place1 = '';
var place2 = '';
function search_result(){
	$.post('/includes/ajax_loads/shop.php',{'time':mktime(), 'proc':'shop_search', 'type':type, 'page':page, 'text':search, 'category':category, 'place1':place1, 'place2':place2},function(data){
		var data_exp = data.split('||^||');
		$('#ajax_result > table > tbody').html(data_exp[0]);
		$('#search_tab > span').text(data_exp[1]);
		$('.paging_outer').html(data_exp[2]);

		$('.paging span').click(function(){
			page = $(this).text();
			search_result();
		});

		$('.page_prev').click(function(){
			if(page != 1) page--;
			search_result();
		});

		$('.page_next').click(function(){
			page++;
			search_result();
		});

		$('#ajax_result > table > tbody > tr').click(function(){
			$('#ajax_result > table > tbody > tr').removeClass('selected');
			$(this).addClass('selected');
		});
	});
}
$(document).ready(function(){
	$('.shop_sch img:not(#search_btn)').click(function(){
		$('.codetitle').removeClass('on').each(function(){
			$(this).attr('src',$(this).attr('src').replace('_on','_off'));
		});
		$(this).attr('src',$(this).attr('src').replace('_off','_on')).addClass('on');
		$('input#shop').attr('placeholder',$(this).attr('placeholder'));
	});
	$('#search_btn').click(function(){
		if($('input#shop').val() == ''){
			alert('검색할 업소 정보를 입력하세요!');
			$('input#shop').focus();
			return false;
		}

		page = 1;
		type = $('.search_form .on').attr('id');
		search = $('input#shop').val();
		category = $('select#category').find('option:selected').val();
		place1 = $('select#place1').find('option:selected').val();
		place2 = $('select#place2').find('option:selected').val();

		search_result();
	});

	$('.data_tab').click(function(){
		$('.data_tab').removeClass('on');
		$(this).addClass('on');

		$('.tab_content').hide();
		$('#'+$(this).attr('id')+'_content').show();
	});

	$('#select_done').click(function(){
		if($('#ajax_result').find('.selected').length <= 0){
			alert('검색결과에서 원하는 업소를 선택(클릭)해주세요.');
			return false;
		}
		var par = window.parent.$;
		par('#shop').val($('#shop').val());
		par('#'+$('.shop_sch img.on').attr('id')).click();
		par('#shop_idx').val($('.selected').attr('idx'));
		par('#shop_name').text($('.selected').attr('name'));
		par('#shop_code').text($('.selected').attr('serial'));
		par('#shop_cate').text($('.selected').attr('category'));
		par('#shop_place').text($('.selected').attr('place'));
		par('#shop_title').text($('.selected').attr('title'));
		par('#shop_name_side').text($('.selected').attr('name'));
		par('#shop_description').text($('.selected').attr('description'));
		par('#shop_cate_side').text($('.selected').attr('category'));
		par('#shop_place_side').text($('.selected').attr('place'));
		par('#shop_txt').show();
		par('#shop_thumb').css('background-image','url(/uploaded/thumb/shop/'+$('.selected').attr('image')+')');

		par('#mask,.popUp').fadeOut(200);
	});
});
</script>
</html>