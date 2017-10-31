<?if(!$MEM['idx']){?><script>alert('로그인 후 이용이 가능합니다.'); history.back();</script><?exit;}

// type이 있을 경우, category 정보 받아두기
$shop_qry = mysql_query("SELECT * FROM shop WHERE idx = '".$PMLIST['SHOP_IDX']."'");
if(mysql_num_rows($shop_qry) > 0){
	$shop_info = mysql_fetch_array($shop_qry);
}?>
<div class="container not_main">
	<div id="login_box">
		<?require_once('login.php');?>
	</div>

	<div class="real_content">
		<img src="/images/write/top.png" class="top_img">

		<div class="write_box">
			<span style="margin-right:30px;">질의 제목을 입력해주세요.</span>질의 대상 업소 <font style="color:#d90000; font-weight:600;">[<?=$shop_info['name']?>]</font>
			<div class="input"><input type="text" id="title" placeholder="제목을 입력해주세요." maxlength=50 style="width:348px;"> <font id="title_cnt">0</font>/50자</div>
			* 허위 정보 및 욕설 또는 광고 등의 문의를 접수하면 해당 글은 통보 없이 삭제됩니다.<br/>
			* 또한 해당 회원은 <u>영구적으로 글쓰기가 제한</u>될 수 있습니다.
		</div>

		<div class="write_box">
			<span>상세설명</span>
			<img src="/images/write/preview.png" style="float:right;">
			<div style="padding-top:20px;">
				<script src="/includes/module/ckeditor/ckeditor.js"></script>
				<style>
					/* Style the CKEditor element to look like a textfield */
					.cke_textarea_inline
					{
						padding: 10px;
						height: 600px;
						overflow: auto;

						background: #f8f8f8;
						color: #807d7d;

						border:0;
						-webkit-appearance: textfield;
					}

					.cke_editable.cke_editable_inline.cke_focus
					{
						box-shadow: inset 0px 0px 20px 3px #ddd, inset 0 0 1px #000;
						outline: none;
						background: #f8f8f8;
						color: #807d7d;
						cursor: text;
					}
				</style>
				<!-- webeditor --><textarea id="articlebody" name="articlebody" class="ckeditor" style="width:100%; height:400px;"></textarea><!-- webeditor -->
				<script>//CKEDITOR.inline( 'articlebody' );</script>
			</div>
		</div>

		<div class="write_box" style="background:#f5f5f5; padding:30px 25px; text-align:center;">
			<img id="article_done" src="/images/write/done.png" style="margin-left:242px;">
		</div>
	</div>
</div>

<script>
CKEDITOR.replace( 'articlebody',
{
	height: '400px'
});

<?$checksum = round(microtime(true) * 1000);?>
var checksum_num = '<?=$checksum?>';

$('#article_done').click(function(){
	var editor = CKEDITOR.instances.articlebody;
	if($('input#title').val() == ''){
		alert('제목을 입력하세요.');
		$('input#title').focus();
		return false;
	}
	if(editor.getData() == '' && $('select#category').find('option:selected').attr('ncon') != '1'){ // 게시글 내용이 꼭 있어야하는 게시판일 경우
		alert('게시물 내용을 작성해주세요.');
		return false;
	}
	$.post('/includes/ajax_loads/shop.php', {'proc':'1to1_insert', 'time':mktime(), 'title':$('#title').val(), 'shop_idx':<?=$PMLIST['SHOP_IDX']?>, 'content':editor.getData(), 'checksum':checksum_num},function(data){
		var split_data = data.split('||');
		if(split_data[0] == 'nologin'){
			alert('로그인 세션이 만료된 것 같습니다.\n내용을 복사하여 백업하시고 재로그인 후\n다시 시도해보시기 바랍니다.');
		} else if(split_data[0] == 'notinserted'){
			alert('게시물 작성 중 오류가 발생하였습니다.\n내용을 복사하여 백업하시고 재로그인 후\n다시 시도해보시기 바랍니다.');
		} else if(split_data[0] == 'success'){
			alert('작성이 완료되었습니다.');
			location.href='/?inc=shop_detail&idx=<?=$PMLIST['SHOP_IDX']?>#box_title_tab';
		} else {
			alert(data);
		}
	});
});

$(document).ready(function(){
	$('input#title').keypress(function(){
		$('#title_cnt').text($(this).val().length);
	});
	$('input#title').keyup(function(){
		$('#title_cnt').text($(this).val().length);
	});
});
</script>