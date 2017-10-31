<div class="layout2_r">
	<div id="sky">
		<a href="#"><img src="/images/banner2.jpg" alt="" /></a>
	</div>
	<div class="sub_contents">
		<?$board_qry = mysql_query("SELECT *, DATE_FORMAT(regtime,'%Y-%m-%d') AS regdate FROM board WHERE idx = '".$PMLIST['IDX']."' AND type = '0'");
		if(mysql_num_rows($board_qry) > 0){
			$board_info = mysql_fetch_array($board_qry);
			mysql_query("UPDATE board SET view_count = view_count + 1 WHERE idx = '".$PMLIST['IDX']."'");
			$category_info = mysql_fetch_array(mysql_query("SELECT * FROM category WHERE idx = '".$board_info['category_idx']."'"));
			$writer_info = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE idx = '".$board_info['user_idx']."'"));?>
		<div class="title4">
			[<?=$category_info['title']?>] <span><?=$board_info['title']?></span>
		</div>
		<div class="sub_banner">
			<img src="/images/banner3.jpg" alt="" />
		</div>
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
		<div class="txt3">
			<span>상세 내용</span><strong><img src="images/dot.jpg" alt="" />등록일 : <?=$board_info['regdate']?><img src="images/dot.jpg" alt="" />조회수 : <?=number_format($board_info['view_count'])?><img src="images/dot.jpg" alt="" />추천수 : <?=number_format($board_info['recommend_count'])?></strong>
		</div>
		<div class="contents_box1">
			<?=$board_info['content']?>
		</div>
		<div class="contents_box2">
			<?$thumb_img = (!$writer_info['thumb'])?'/images/pic2.jpg':'/uploaded/thumb/user/'.$writer_info['thumb'];;?>
			<dl><div class="thumb" style="background-image:url(<?=$thumb_img?>); filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$thumb_img?>',sizingMethod='scale'); -ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$thumb_img?>', sizingMethod='scale');"></div></dl>
			<dt>
				<ul>
					<li>[닉네임] : <?=$writer_info['nick']?$writer_info['nick']:$writer_info['name']?><span>[레벨] :  <?=$ULEVEL[$writer_info['level']]?></span></li>
					<li>
						<!-- div class="btn_area1">
							<a href="#"><img src="/images/icon1.jpg" alt="" />쪽지발송</a><a href="#"><img src="/images/icon2.jpg" alt="" />채팅신청</a><a href="#"><img src="/images/icon3.jpg" alt="" />친구추가</a>
						</div -->
						<?$wrote_count = @mysql_result(mysql_query("SELECT COUNT(idx) FROM board WHERE user_idx = '".$writer_info['idx']."' AND status = '0'"),0);
						$user_reco_count = @mysql_result(mysql_query("SELECT SUM(recommend_count) FROM board WHERE user_idx = '".$writer_info['idx']."' AND status = '0'"),0);?>
						<div class="btn_area2" style="margin-top:15px;">
							<a href="#">작성글 : <b><?=number_format($wrote_count)?></b>건</a><a href="#">총 추천수 : <b><?=number_format($user_reco_count)?></b>회</a>
						</div>
					</li>
				</ul>
			</dt>
			<dd><img src="/images/img8.jpg" alt="" /></dd>
		</div>
		<div class="contents_box3">
			<a href="javascript:" id="recommend" class="rec_box"><img src="/images/heart1.jpg" alt="" /><font id="recommend_count"><?=number_format($board_info['recommend_count'])?></font><span>추천</span></a><a href="javascript:" id="not_recommend" class="rec_box"><img src="/images/heart2.jpg" alt="" /><font id="not_recommend_count"><?=number_format($board_info['unreco_count'])?></font><span>비추천</span></a>
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
		<div class="contents_box5">
			<input id="keylog" type="hidden" value="<?=mktime()?>">
			<?$wrote_count = @mysql_result(mysql_query("SELECT COUNT(idx) FROM comment WHERE article_idx = '".$PMLIST['IDX']."' AND type = 'board' AND status = '0'"),0);?>
			<dl>
				댓글 <span>(총 <b id="comment_count"><?=number_format($wrote_count)?></b>개)</span>
			</dl>
			<dt>
				<span class="btn_area3">
					<a href="#"><img src="/images/sns1.jpg" alt="" /></a><a href="#"><img src="/images/sns2.jpg" alt="" /></a><a href="#"><img src="/images/sns3.jpg" alt="" /></a>
				</span><!-- span class="btn_area4">
					<a href="#">스크랩 <b>0</b></a><a href="#">카페</a><a href="#">블로그</a><a href="#">메일</a>
				</span><strong>
				<a href="#">인쇄</a>|<a href="#">신고</a>
				</strong-->
			</dt>
		</div>
		<div class="reply_box">
			<div>
				<dl>
					<textarea class="comment_text" idx="0" maxlength="140" placeholder="댓글을 작성해주세요!"></textarea>
					<p>
						<!--input type="checkbox" id="chk2" /><label for="chk2"> 트위터</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 선택하시면 함께 등록 됩니다.-->
						* 욕설 및 비방 등을 입력하시면, 댓글 작성을 금지당할 수 있습니다.
						<span class="comment_txt_count"><b id="cmt_txt_cnt_0">0 </b>/ 140자</span>
					</p>
				</dl>
				<dl><a href="javascript:" class="comment_done" idx="0">댓글 등록</a></dl>
			</div>
		</div>
		<ul id="comment_list" class="reply_box2"></ul>
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