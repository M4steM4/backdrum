<?php
require_once ("connect.php");


#인기검색어
$popular_search_query=mysqli_query($connect,"SELECT * FROM `board` ORDER BY `regdate` DESC, `view_count` DESC LIMIT 50");


#메인페이지 전체게시물 메인 카드들 
$main_allboard_query= mysqli_query($connect, "SELECT * FROM `board` ORDER BY `regdate` DESC LIMIT 6");
$main_allboard_best_query= mysqli_query($connect, "SELECT * FROM `board` ORDER BY `view_count` DESC LIMIT 5");

#인터넷 개통글
$internetgatong_query= mysqli_query($connect, "SELECT * FROM board WHERE `primetime` = '1' ORDER BY `regdate` DESC LIMIT 6");

#호랑이 담배피던글
$horang_query= mysqli_query($connect, "SELECT * FROM board WHERE `primetime` = '2' ORDER BY `regdate` DESC LIMIT 6");

#핫하다못해 터져부렀다
$hot_query = mysqli_query($connect, "SELECT * FROM board ORDER BY `view_count` DESC LIMIT 6");


#메인페이지 사회이슈 메인카드들
$main_board1_query= mysqli_query($connect, "SELECT * FROM `board` WHERE `category_idx` = '1' ORDER BY `regdate` DESC LIMIT 6");
$main_board1_best_query= mysqli_query($connect, "SELECT * FROM `board` WHERE `category_idx` = '1' ORDER BY `view_count` DESC LIMIT 5");

#메인페이지 재밌는거 메인카드들
$main_board2_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '2' ORDER BY `regdate` DESC LIMIT 6");
$main_board2_best_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '2' ORDER BY `view_count` DESC LIMIT 5");

#메인페이지 꿀팁정보 메인카드들
$main_board3_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '3' ORDER BY `regdate` DESC LIMIT 6");
$main_board3_best_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '3' ORDER BY `view_count` DESC LIMIT 5");

#메인페이지 연애계썰 메인카드들
$main_board4_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '4' ORDER BY `regdate` DESC LIMIT 6");
$main_board4_best_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '4' ORDER BY `view_count` DESC LIMIT 5");

#메인페이지 리뷰&후기 메인카드들
$main_board5_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '5' ORDER BY `regdate` DESC LIMIT 6");
$main_board5_best_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '5' ORDER BY `view_count` DESC LIMIT 5");

#메인페이지 사건사고 메인카드들
$main_board6_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '6' ORDER BY `regdate` DESC LIMIT 6");
$main_board6_best_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '6' ORDER BY `view_count` DESC LIMIT 5");


#메인페이지 애완동물 메인카드들
$main_board7_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '7' ORDER BY `regdate` DESC LIMIT 6");
$main_board7_best_query= mysqli_query($connect, "SELECT * FROM board WHERE `category_idx` = '7' ORDER BY `view_count` DESC LIMIT 5");




?>