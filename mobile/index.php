<?php
require_once ("connect.php");
require_once ("mainpage_query.php");
?>

<!DOCTYPE html>
<html>
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NSZRKPT');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSZRKPT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<body>
	<nav class="nav-extended white black-text">
		<div class="nav-wrapper ">
			<a href="/mobile" class="brand-logo"><img src="http://jjaltoon.backdrum.net/images/logo.png" width="80px"></a>
			<a href="#" data-activates="mobile-demo " class="button-collapse"><i class="material-icons grey-text">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down ">
				<li><a href="sass.html" class="black-text">Sass</a></li>
				<li><a href="badges.html">Components</a></li>
				<li><a href="collapsible.html">JavaScript</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">

				<li class="blue white-text">실시간 인기 뒷북</li>
				<?
				$i=0;
				while ($data =mysqli_fetch_array($popular_search_query)){
					$i++;
					if($i==11){
						break;
					}
					?>
					<li><a href="/mobile/detail.php?id=<?echo $data[idx] ?>" class="jumjumjum"><span class="ingi-num blue-text"><?echo $i?></span> <? echo $data[title] ?></a></li>
				<? } ?>

			</ul>
		</div>

		<div class="nav-content">
			<ul class="tabs tabs-transparent blue">
				<li class="tab"><a  href="#test1">전체기사</a></li>
				<li class="tab"><a href="#test2">사회이슈</a></li>
				<li class="tab"><a href="#test3">재밌는거</a></li>
				<li class="tab"><a href="#test4">꿀팁정보</a></li>
				<li class="tab"><a href="#test5">연예계 썰</a></li>
				<li class="tab"><a href="#test6">리뷰&후기</a></li>
				<li class="tab"><a href="#test7">사건사고</a></li>
				<li class="tab"><a href="#test8">애완동물</a></li>
			</ul>
		</div>
	</nav>
	<ul id="slide-out" class="side-nav">
		<li><div class="user-view">
			<div class="background">
				<img src="images/office.jpg">
			</div>
			<a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
			<a href="#!name"><span class="white-text name">John Doe</span></a>
			<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
		</div></li>
		<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
		<li><a href="#!">Second Link</a></li>
		<li><div class="divider"></div></li>
		<li><a class="subheader">Subheader</a></li>
		<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
	</ul>
	<div id="test1" class="col s12">

		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_allboard_best_query)){
				echo "<li class='collection-item jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_allboard_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%"">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=0&page=1&title=전체게시물">
					더보기
				</a>
			</li>
		</ul>
		<ul class="collection">
			<li class="collection-item col s3 list-name">인터넷 개통글
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($internetgatong_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>



				</div>
			</li>

		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">호랑이 담배피던 글
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($horang_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">HOT하지 못해 타버려뿟다
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($hot_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
		</ul>

	</div>
	<div id="test2" class="col s12">
		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_board1_best_query)){
				echo "<li class='collection-item jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_board1_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=1&page=1&title=사회이슈">
					더보기
				</a>
			</li>
		</ul>

	</div>
	<div id="test3" class="col s12">
		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_board2_best_query)){
				echo "<li class='collection-item jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_board2_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=2&page=1&title=재밌는거">
					더보기
				</a>
			</li>
		</ul>

	</div>
	<div id="test4" class="col s12">
		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_board3_best_query)){
				echo "<li class='collection-item jumjumjum jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_board3_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=3&page=1&title=꿀팁정보">
					더보기
				</a>
			</li>
		</ul>

	</div>
	<div id="test5" class="col s12">
		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_board4_best_query)){
				echo "<li class='collection-item jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_board4_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=4&page=1&title=연애계 썰">
					더보기
				</a>
			</li>
		</ul>

	</div>
	<div id="test6" class="col s12">
		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_board5_best_query)){
				echo "<li class='collection-item jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_board5_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=5&page=1&title=리뷰&후기">
					더보기
				</a>
			</li>
		</ul>

	</div>
	<div id="test7" class="col s12">
		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_board6_best_query)){
				echo "<li class='collection-item jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_board6_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=6&page=1&title=사건사고">
					더보기
				</a>
			</li>
		</ul>

	</div>
	<div id="test8" class="col s12">
		<ul class="collection">
			<li class="collection-item col s3 list-name">베스트 뒷북
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<?php
			while ($data =mysqli_fetch_array($main_board7_best_query)){
				echo "<li class='collection-item jumjumjum'><a href='/mobile/detail.php?id=$data[idx]' class='black-text'>$data[title]</a></li>";
			}

			?>
		</ul>

		<ul class="collection">
			<li class="collection-item col s3 list-name">전체 게시물
				<li class="collection-item no-padding list-name-highligh"></li>

			</li>
			<li class="collection-item img-card-box">
				<div class="row no-margin">
					<?php
					while ($data =mysqli_fetch_array($main_board7_query)){
						?>
						<div class="col s6" onclick="location.href='/mobile/detail.php?id=<? echo $data[idx]; ?>'">
							<div class="thumbnail">
								<img src="/uploaded/board/<?echo $data[image];
								if($data[image]==""){
									echo"defailt.png";
								}
								?>"  width="100%">
							</div>
							<p class="img-title jumjumjum"> <?echo $data[title];?><br/><span class="writer">
								<i class="material-icons writer">edit</i> <?echo $data[user_nick];?>
							</span></p>

						</div>
						<?php
					}

					?>
				</div>
			</li>
			<li class="collection-item center">
				<a class="grey-text" href="list.php?category=7&page=1&title=애완동물">
					더보기
				</a>
			</li>
		</ul>

	</div>
	<ul class="collection">
		<li class="collection-item col s3s center"><a class="center" href="/?display=pc">PC버전으로 뒷북치기</a>
		</li>
	</ul>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('ul.tabs').tabs();
			$(".button-collapse").sideNav();
		});
	</script>
</body>
</html>
