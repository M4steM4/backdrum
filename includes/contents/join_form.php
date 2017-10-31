<?if($MEM['IdMaster'] > 0){?><script>alert('이미 로그인하셨습니다.');history.back();</script><?exit;}?>
<div class="full_container" style="width:941px; padding:43px 45px;">
	<img src="/images/join_form/top.png" style="border-bottom:1px solid #ccc;">
	<div style="border-bottom:1px solid #ccc; overflow:hidden;">
		<img src="/images/join_form/01title.png" style="margin-right:143px; float:left;">
		<div id="qform" class="jform">
			<input type="text" id="id" name="id" placeholder="아이디를 입력해주세요." maxlength="18">
			<input type="password" id="pass" name="pass" placeholder="비밀번호 * 영문 / 숫자 조합 8~16자리" maxlength="16">
			<input type="password" id="pass_re" name="pass_re" placeholder="비밀번호를 다시 입력해주세요." maxlength="16">
			<div>* 본인 확인(비밀번호)을 위해서 정확한 정보를 입력하셔야 합니다.</div>
			<input type="text" id="name" name="name" placeholder="이름을 입력해주세요." maxlength="8">
			<input type="text" id="nickname" name="nickname" placeholder="닉네임을 입력해주세요." maxlength="8">
			<input type="text" id="email" name="email" placeholder="이메일 * 예 : aaa@bbb.com" maxlength="100">
			<input type="text" id="hp" name="hp" placeholder="휴대폰 번호 '-' 없이 번호만 입력해주세요." maxlength="12">
			<div><input type="checkbox" id="event"><label id="label_event" for="event"></label> <label for="label_event">이벤트 정보 SMS 수신에 동의합니다.</label></div>
			<div class="sel">
				<select id="category">
					<option value="none">선호 카테고리 선택</option>
					<?$category_qry = mysql_query("SELECT * FROM category");
					if(mysql_num_rows($category_qry) > 0){
						while($row = mysql_fetch_array($category_qry)){?>
					<option value="<?=$row['idx']?>"><?=$row['title']?></option>
						<?}
					}?>
				</select>
			</div> <div class="sel">
				<select id="place">
					<option value="none">선호 지역 선택</option>
					<?$place_qry = mysql_query("SELECT * FROM place1");
					if(mysql_num_rows($place_qry) > 0){
						while($row = mysql_fetch_array($place_qry)){?>
					<option value="<?=$row['idx']?>"><?=$row['title']?></option>
						<?}
					}?>
				</select>
			</div>
		</div>
	</div>
	<div style="border-bottom:1px solid #ccc; overflow:hidden;">
		<img src="/images/join_form/02title.png" style="margin-right:143px; float:left;">
		<div id="terms">
			<div><input type="checkbox" id="all_check"><label id="label_all_check" for="all_check"></label> <label for="label_all_check">[전체동의] 회원가입 약관에 모두 동의합니다.</label></div>
			[이용약관, 전자금융거래 이용약관, 개인정보 수집 및 이용, 개인정보의 제 3자 제공, 개인정보의 취급 위탁]
			<div class="term_title"><input type="checkbox" id="terms_chk"><label id="label_terms" for="terms_chk"></label> <label for="label_terms">이용약관 동의(필수)</label> <span onclick=location.href='/?inc=terms'>전문보기</span></div>
			<textarea readonly><?=$PMSETTING['terms']?></textarea>
			<div class="term_title" style="margin-top:0;"><input type="checkbox" id="privacy_chk"><label id="label_privacy" for="privacy_chk"></label> <label for="label_privacy">개인정보 수집 및 이용(필수)</label> <span onclick=location.href='/?inc=privacy'>전문보기</span></div>
			<textarea style="border-bottom:1px solid #ccc;" readonly><?=$PMSETTING['privacy']?></textarea>
		</div>
	</div>
	<div style="overflow:hidden; padding:20px 0 32px; color:#989898;">
		<div style="width:700px; float:right;">업소다나와는 회원간의 건전한 커뮤니티 공간입니다. 따라서 허위 정보 입력 및 타인 명의 도용, 미풍 양속에 저해하는 회원의 가입은 거절 될 수 있으며, 회원 본인의 정확한 전화번호 및 이메일 정보를 입력하셔야 정상적인 이용이 가능합니다. 개인정보 도용 및 허위정보 입력에 대한 책임과 불이익은 회원 본인이 감수하게 되오니 개인정보 입력시 유의 하시기 바랍니다.</div>
	</div>
	<img class="jbtn" src="/images/join_form/done.png">
</div>

<script>
$(document).ready(function() {
    $("#hp").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

	$('.agree_img').click(function(){
		if($(this).hasClass('agreed')){
			$(this).removeClass('agreed').attr('src',$(this).attr('src').replace('_chk.png','.png'));
		} else {
			$(this).addClass('agreed').attr('src',$(this).attr('src').replace('.png','_chk.png'));
		}
	});

	$("#id").blur(function(){
		if($(this).val() != ''){
			if($(this).val().length < 4 || $(this).val().length > 18){
				alert('아이디는 4~18자리로 입력하셔야 합니다.');
				$(this).data('chk','none');
				$(this).val('');
			} else {
				data = "proc=id_chk&id="+$(this).val();
				$.ajax({
					type: "POST",
					url: "/includes/ajax_loads/join.php",
					cache: false,
					data: data,
					success: function(rtn){
						var code = rtn.split("||");
						if(code[0]=='already_used'){
							alert('이미 사용 중인 아이디입니다.');
							$('#id').val('').focus();
							$('#id').data('chk','none');
						}else if(code[0]=='success'){
							$('#id').data('chk','okay');
						}else{
							alert(code[0]);
							$('#id').val('').focus();
							$('#id').data('chk','none');
						}
					}
				});
			}
		} else {
			$(this).data('chk','none');
		}
	});

	$("#nickname").blur(function(){
		if($(this).val() != ''){
			if($(this).val().length < 2 || $(this).val().length > 8){
				alert('닉네임은 2~8자리로 입력하셔야 합니다.');
				$(this).data('chk','none');
				$(this).val('');
			} else {
				data = "proc=nick_chk&nickname="+$(this).val();
				$.ajax({
					type: "POST",
					url: "/includes/ajax_loads/join.php",
					cache: false,
					data: data,
					success: function(rtn){
						var code = rtn.split("||");
						if(code[0]=='already_used'){
							alert('이미 사용 중인 닉네임입니다.');
							$('#nickname').val('').focus();
							$('#nickname').data('chk','none');
						}else if(code[0]=='success'){
							$('#nickname').data('chk','okay');
						}else{
							alert(code[0]);
							$('#nickname').val('').focus();
							$('#nickname').data('chk','none');
						}
					}
				});
			}
		} else {
			$(this).data('chk','none');
		}
	});

	$("#email").blur(function(){
		if($(this).val() != ''){
			var regExp = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if(!regExp.test($(this).val())){
				alert("이메일을 정확히 입력해 주세요.");
				$(this).data('chk','none');
				$(this).val('');
			} else {
				data = "proc=email_chk&email="+$(this).val();
				$.ajax({
					type: "POST",
					url: "/includes/ajax_loads/join.php",
					cache: false,
					data: data,
					success: function(rtn){
						var code = rtn.split("||");
						if(code[0]=='already_used'){
							alert('이미 사용 중인 이메일입니다.');
							$('#email').val('');
							$('#email').data('chk','none');
						}else if(code[0]=='success'){
							$('#email').data('chk','okay');
						}else{
							alert(code[0]);
							$('#email').val('');
							$('#email').data('chk','none');
						}
					}
				});
			}
		} else {
			$(this).data('chk','okay');
		}
	});

	$("#pass").blur(function(){
		if($(this).val() != ''){
			if($(this).val().length < 8 || $(this).val().length > 16){
				//$('#pass_err').text('비밀번호는 8~16자리로 입력하셔야 합니다.');
				alert('비밀번호는 8~16자리로 입력하셔야 합니다.');
				$(this).data('chk','none');
				$(this).val('');
			} else {
				if($(this).val() == $('#pass_re').val()){
					$(this).data('chk','okay');
				} else {
					$(this).data('chk','none');
				}
			}
		} else {
			$(this).data('chk','none');
		}
	});

	$("#pass_re").focus(function(){
		if($("#pass").val() == ''){
			alert('비밀번호 먼저 입력해주세요!');
			$('#pass').focus();
		}
	});

	$("#pass_re").blur(function(){
		if($('#pass').val() != $(this).val()){
			alert('비밀번호가 일치하지 않습니다.');
			$('#pass').data('chk','none');
			$(this).val('');
		} else {
			$('#pass').data('chk','okay');
		}
	});

	$("#hp").blur(function(){
		if($(this).val() != ''){
			data = "proc=phone_chk&phone="+$('#hp').val();
			$.ajax({
				type: "POST",
				url: "/includes/ajax_loads/join.php",
				cache: false,
				data: data,
				success: function(rtn){
					var code = rtn.split("||");
					if(code[0]=='already_used'){
						alert('이미 사용 중인 휴대폰 번호입니다.');
						$('#hp').val('');
						$('#hp').data('chk','none');
					}else if(code[0]=='success'){
						$('#hp').data('chk','okay');
					}else{
						alert(code[0]);
						$('#hp').val('');
						$('#hp').data('chk','none');
					}
				}
			});
		} else {
			$(this).data('chk','okay');
		}
	});

	$('#terms_chk').change(function(){
		if($(this).is(':checked') && $('#privacy_chk').is(':checked')){
			$('#all_check').prop('checked',true);
		} else {
			$('#all_check').prop('checked',false);
		}
	});

	$('#privacy_chk').change(function(){
		if($(this).is(':checked') && $('#terms_chk').is(':checked')){
			$('#all_check').prop('checked',true);
		} else {
			$('#all_check').prop('checked',false);
		}
	});

	$('#all_check').change(function(){
		if($(this).is(':checked')){
			$('#terms_chk').prop('checked',true);
			$('#privacy_chk').prop('checked',true);
		} else {
			$('#terms_chk').prop('checked',false);
			$('#privacy_chk').prop('checked',false);
		}
	});

	$('.jbtn').click(function(){
		if(!$('#terms_chk').is(':checked')){
			alert('이용약관에 동의해주세요!');
			return false;
		}
		if(!$('#privacy_chk').is(':checked')){
			alert('개인정보취급방침에 동의해주세요!');
			return false;
		}

		if($('#id').data('chk')!='okay'){
			alert('아이디를 다시 확인해주세요.');
			$('#id').focus();
			return false;
		}

		if($("#pass").data('chk')!='okay'){
			alert('비밀번호를 다시 확인해주세요.');
			$('#pass').val('').focus();
			return false;
		}

		if($('#name').val()==''){
			alert('이름을 입력하세요.');
			$('#name').focus();
			return false;
		}

		if($('#nickname').data('chk')!='okay'){
			alert('닉네임을 다시 확인해주세요.');
			$('#nickname').focus();
			return false;
		}

		if($('#hp').data('chk')=='none'){
			alert('휴대폰 번호를 다시 확인해주세요.');
			$('#hp').focus();
			return false;
		}

		var regExp = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if($('#email').val() != '' && !regExp.test($('#email').val())){
			alert("이메일을 정확히 입력해 주세요.");
			$('#email').data('chk','none');
			$("#email").focus();
			return false;
		}
		if($('#email').data('chk')=='none'){
			alert('이메일를 다시 확인해주세요.');
			$('#email').focus();
			return false;
		}

		$(this).hide();

		var data_add = '';

		data_add += ($('#event').is(':checked'))?"&sms=1":"&sms=0";
		if($('selected#category').find('option:selected') != 'none') data_add += "&category="+$('select#category').find('option:selected').val();
		if($('selected#place').find('option:selected') != 'none') data_add += "&place="+$('select#place').find('option:selected').val();

		var data = 'id='+$('#id').val()+'&name='+$('#name').val()+'&nickname='+$('#nickname').val()+'&pass='+$('#pass').val()+'&email='+$('#email').val()+"&phone="+$('#hp').val() + data_add;
		$.ajax({
			type: "POST",
			url: "/includes/ajax_loads/join.php",
			cache: false,
			data: data,
			success: function(rtn){
				var code = rtn.split("||");
				if(code[0]=='already_used'){
					alert('이미 가입된 이메일 정보입니다.\n로그인 페이지로 이동하겠습니다.');
					location.href='/?inc=login';
				}else if(code[0]=='success'){
					alert('회원가입이 완료되었습니다.');
					location.href='/';
				}else{
					alert(code[0]);//에러출력
					$('.jbtn').show();
				}
			}
		});
		return false;
	});
});
</script>