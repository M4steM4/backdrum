<div class="container not_main">
	<div id="login_box">
		<?require_once('login.php');?>
	</div>
	<?$board_qry = mysql_query("SELECT *, DATE_FORMAT(regtime,'%Y-%m-%d') AS regdate FROM board WHERE idx = '".$PMLIST['IDX']."' AND type = '0'");
	if(mysql_num_rows($board_qry) > 0){
		$board_info = mysql_fetch_array($board_qry);
		mysql_query("UPDATE board SET view_count = view_count + 1 WHERE idx = '".$PMLIST['IDX']."'");
		$category_info = mysql_fetch_array(mysql_query("SELECT * FROM community_category WHERE idx = '".$board_info['community_category_idx']."'"));
		$writer_info = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE idx = '".$board_info['user_idx']."'"));?>

	<div class="real_content">
		<div class="title_box">
			<div class="title_txt">[<?=$board_info['community_category_title']?>] <?=$board_info['title']?></div>
			<div class="article_info">최초 등록일 : <?=$board_info['regdate']?> | 조회수 : <?=number_format($board_info['view_count'])?></div>
		</div>

		<img class="mid_desc board" src="/images/common/description.png" style="border-top:1px solid #ccc; border-bottom:0;">

		<?if($board_info['image']){?>
		<div class="write_box" style="color:#666; position:relative;">
			<?$img_exp = explode(',',$board_info['image']);?>
			<div id="shop_photo_view" style="background-image:url(/uploaded/board/<?=$img_exp[0]?>);"></div>
			<div id="shop_photo_sel">
				<?for($i=0; $i<count($img_exp); $i++){?>
				<div style="background-image:url(/uploaded/board/<?=$img_exp[$i]?>);<?if($i==0){?> box-shadow: 0 0 0 4px red inset; border:1px solid red;<?}?>" src="/uploaded/board/<?=$img_exp[$i]?>"></div>
				<?}?>
			</div>
		</div>
		<script>
		$(document).ready(function(){
			$('#shop_photo_sel div').mouseenter(function(){
				$('#shop_photo_sel div').css({'box-shadow':'none', 'border':'1px solid #ccc'});
				$(this).css({'box-shadow':'0 0 0 4px red inset', 'border':'1px solid red'});
				$('#shop_photo_view').css('background-image','url('+$(this).attr('src')+')');
			});
		});
		</script>
		<?}?>

		<div class="box_title selected">상세내용</div>
		<div class="box_title_desc"></div>

		<div class="write_box doc_content" style="border-top:0;">
			<div style="float:none; overflow:hidden;">
				<?=preg_replace('@<img@is','<img alt="'.$board_info['title'].'"',$board_info['content']);?>
			</div>
			<div class="writer_info">
				<div class="thumb" style="background-image:url(<?if(!$MEM['thumb']){?>/images/common/default_avatar.png<?}else{?><?=$MEM['thumb']?><?}?>);"></div>
				<div class="info_txt">
					<div class="user_nick">[닉네임] : <?=$board_info['user_nick']?></div>
					<?$wrote_count = @mysql_result(mysql_query("SELECT COUNT(idx) FROM board WHERE user_idx = '".$writer_info['idx']."' AND status = '0'"),0);
					$user_reco_count = @mysql_result(mysql_query("SELECT SUM(recommend_count) FROM board WHERE user_idx = '".$writer_info['idx']."' AND status = '0'"),0);?>
					<div class="btns">
						<img src="/images/view/message.png"><img src="/images/view/chat.png"><img src="/images/view/friend.png">
						<div class="btn" style="width:115px;">작성글 : <span><?=number_format($wrote_count)?></span>건</div>
						<div class="btn" style="width:144px;">총 추천수 : <span><?=number_format($user_reco_count)?></span>회</div>
					</div>
				</div>
			</div>
		</div>

		<div class="write_box" style="background:#f5f5f5; padding:13px 25px; text-align:center;">
			<div id="recommend" class="rec_box">
				<div class="heart_zone">
					<img src="/images/view/heart.png">
					<div id="recommend_count" class="rec_count"><?=number_format($board_info['recommend_count'])?></div>
				</div>
				<div class="txt">추천</div>
			</div>
			<div id="not_recommend" class="rec_box">
				<div class="heart_zone">
					<img src="/images/view/non_heart.png">
					<div id="not_recommend_count" class="rec_count"><?=number_format($board_info['unreco_count'])?></div>
				</div>
				<div class="txt">비추천</div>
			</div>
		</div>
		<script>
		$(document).ready(function(){
			$('.rec_box').click(function(){
				var rec_txt = "";
				if($(this).attr('id') == 'recommend'){
					rec_txt = "추천";
				} else if($(this).attr('id') == 'not_recommend'){
					rec_txt = "비추천";
				}

				$.post('/includes/ajax_loads/board.php',{'proc':'recommend', 'type':$(this).attr('id'), 'time':mktime(), 'idx':<?=$PMLIST['IDX']?>},function(data){
					var data_split = data.split('||');
					if(data_split[0] == 'nologin'){
						alert('로그인 후 이용하세요!');
					} else if(data_split[0] == 'already') {
						alert('이미 이 게시물을 '+rec_txt+'하셨습니다.');
					} else if(data_split[0] == 'success') {
						alert('해당 게시물을 '+rec_txt+'하였습니다.');
						$('#recommend_count').text(number_format(data_split[1]));
						$('#not_recommend_count').text(number_format(data_split[2]));
					} else {
						alert(data);
					}
				});
			});
		});
		</script>

		<div class="write_box" style="padding:38px 17px 28px; width:724px;">
			<input id="keylog" type="hidden" value="<?=mktime()?>">
			<?$wrote_count = @mysql_result(mysql_query("SELECT COUNT(idx) FROM comment WHERE article_idx = '".$PMLIST['IDX']."' AND type = 'board' AND status = '0'"),0);?>
			<img src="/images/view/comment.png"><div class="comment_txt">(총 <span id="comment_count"><?=number_format($wrote_count)?></span>개)</div><img src="/images/view/comment_terms.png" id="comment_term">
			<div class="comment_write_box">
				<textarea class="comment_text" idx="0" maxlength="140"></textarea>
				<div class="comment_done" idx="0">댓글 등록</div>
				<!--div class="comment_sub_text">
					<input type="checkbox" id="twitter">
					<label id="label_twitter" for="twitter"></label>
					<label for="label_twitter">트위터</label>
					* 선택하시면 함께 등록됩니다.
				</div-->
				<div class="comment_txt_count"><font id="cmt_txt_cnt_0">0</font> / 140자</div>
			</div>
			<div class="comment_list"></div>
		</div>
		<script>
		$(document).ready(function(){
			get_comment('<?=$PMLIST['IDX']?>','board');

			$('.comment_done').click(function(){
				insert_comment('<?=$PMLIST['IDX']?>','board',$('textarea.comment_text[idx='+$(this).attr('idx')+']'));
			});
		});
		</script>
	</div>
	<?}?>
</div>

<script>
$(document).ready(function(){
	$('textarea.comment_text').keypress(function(){
		$('#cmt_txt_cnt_'+$(this).attr('idx')).text($(this).val().length);
	});
	$('textarea.comment_text').keyup(function(){
		$('#cmt_txt_cnt_'+$(this).attr('idx')).text($(this).val().length);
	});
});
</script>