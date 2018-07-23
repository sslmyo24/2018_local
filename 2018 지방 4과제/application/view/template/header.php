<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>웹 하드</title>
	<link rel="stylesheet" type="text/css" href="/public/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="/public/css/common.css">
	<link rel="stylesheet" type="text/css" href="/public/css/fontawesome-all.min.css">
	<script type="text/javascript" src="/public/js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="/public/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/public/js/common.js"></script>
</head>
<body>
<header id="header">
	<nav class="util">
		<div>
<?php if($is_member){ ?>
			<a href="/login/logout">로그아웃</a>
<?php } else { ?>
			<a href="/login">로그인</a>
<?php } ?>
		</div>
	</nav>
	<div class="content">
		<h3 class="logo"><a href="#">웹 하드</a></h3>
		<ul class="gnb">
<?php if($is_member){
		if($member->level == 10){?>
			<li><a href="/member">회원 목록</a></li>
		<?php } ?>
			<li><a href="/share/in_list">내부공유 목록</a></li>
	<?php } ?>
			<li><a href="/share/out_list">외부공유 목록</a></li>
			<li><a href="/file">파일 목록</a></li>
		</ul>
	</div>
</header>
<section class="site-content">