<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
//include_once(G5_LIB_PATH.'/poll.lib.php');
//include_once(G5_LIB_PATH.'/visit.lib.php');
//include_once(G5_LIB_PATH.'/connect.lib.php');
//include_once(G5_LIB_PATH.'/popular.lib.php');

if($bo_table) {
	$E_bo = sql_fetch("SELECT * FROM g5_board where bo_table ='$bo_table'");
}

// 오늘 새글
function bo_count($bo){
	$cnt = 0;
	foreach (func_get_args() as $bo) {
		$table = "g5_write_".$bo;
		$sql = "select count(*) cnt from $table where wr_datetime >= CURRENT_DATE() and wr_is_comment=0";
		$row = sql_fetch($sql);
		$cnt += $row['cnt'];
	}
	return $cnt;;
}

// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}

?>





<!-------------------------- 네비게이션 -------------------------->
<div class="navigation container-fluid top-line fixed-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="tnb-left">
					<!-- social -->
					<div class="sns_icon">
					<a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</div>
					<div class="sns_icon">
					<a href="#"><i class="fab fa-twitter"></i></a>
					</div>
					<div class="sns_icon">
					<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
				<div id="tnb">
					<ul>
					<?php if($is_member) { ?>
						<li><a href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
					<?php }else{ ?>
						<li><a href="<?php echo G5_URL?>/bbs/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/login.php"><i class="fas fa-sign-in-alt"></i> 로그인</a></li>
					<?php }?>
						<li><a href="<?php echo G5_URL?>/bbs/faq.php"><i class="fa fa-question" aria-hidden="true"></i> <span>FAQ</span></a></li>
						<li><a href="<?php echo G5_URL?>/bbs/qalist.php"><i class="fa fa-comments" aria-hidden="true"></i> <span>1:1문의</span></a></li>
						<li><a href="<?php echo G5_URL?>/bbs/current_connect.php" class="visit"><i class="fa fa-users" aria-hidden="true"></i> <span>접속자</span><strong class="visit-num">
						1</strong></a></li>
						<li><a href="<?php echo G5_URL?>/bbs/new.php"><i class="fa fa-history" aria-hidden="true"></i> <span>새글</span></a></li>
						<?php if($is_admin) { ?>
						<li><a href="<?php echo G5_URL?>/adm">관리자</a></li>
						<?php } ?>
					</ul>
				</div>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
</div>
<style>
.collapse.in{
    -webkit-transition-delay: 4s;
    transition-delay: 5s;
    visibility: visible;
}
</style>
<nav class="navbar fixed-top navbar-expand-lg navbar-white bg-white">
  <div class="container">
	<a class="navbar-brand logo" href="<?php echo G5_URL?>"><svg version="1.1" id="Layer_1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px"
  	 width="180px" height="45px"viewBox="0 0 230 58" style="enable-background:new 0 0 230 58;" xml:space="preserve">
  <g>
  	<path d="M50.08,39.32c0,2.53-0.85,4.66-2.54,6.39c-1.69,1.73-3.8,2.59-6.33,2.59c-0.46,0-0.93,0-1.39,0
  		c-0.53-0.11-0.93-0.18-1.18-0.21c0.75-0.71,1.12-1.45,1.12-2.2c0-0.68-0.14-1.29-0.42-1.85c-0.28-0.55-0.76-1.28-1.43-2.17
  		L26.23,26.92c-1.14-1.46-1.92-2.73-2.35-3.8c-0.53-1.32-0.8-2.8-0.8-4.44c0-2.57,0.86-4.72,2.59-6.44
  		c1.73-1.73,3.95-2.59,6.66-2.59c0.36,0,0.71,0.03,1.07,0.08c0.36,0.05,0.73,0.1,1.12,0.13c-0.71,0.75-1.07,1.55-1.07,2.4
  		c0,0.53,0.16,1.11,0.49,1.73c0.33,0.62,0.78,1.31,1.35,2.05l11.67,15.05c1.07,1.39,1.86,2.7,2.36,3.93
  		C49.83,36.25,50.08,37.68,50.08,39.32z M37.19,48.3H23.61V30.71L37.19,48.3z M48.58,26.01L35.96,9.65h12.62V26.01z"/>
  	<path d="M78.52,39.32c0,2.53-0.85,4.66-2.54,6.39c-1.69,1.73-3.8,2.59-6.33,2.59c-0.46,0-0.93,0-1.39,0
  		c-0.53-0.11-0.93-0.18-1.18-0.21c0.75-0.71,1.12-1.45,1.12-2.2c0-0.68-0.14-1.29-0.42-1.85c-0.28-0.55-0.76-1.28-1.43-2.17
  		L54.67,26.92c-1.14-1.46-1.92-2.73-2.35-3.8c-0.53-1.32-0.8-2.8-0.8-4.44c0-2.57,0.86-4.72,2.59-6.44
  		c1.73-1.73,3.95-2.59,6.66-2.59c0.36,0,0.71,0.03,1.07,0.08c0.36,0.05,0.73,0.1,1.12,0.13c-0.71,0.75-1.07,1.55-1.07,2.4
  		c0,0.53,0.16,1.11,0.49,1.73c0.33,0.62,0.78,1.31,1.35,2.05L75.4,31.09c1.07,1.39,1.86,2.7,2.36,3.93
  		C78.27,36.25,78.52,37.68,78.52,39.32z M65.63,48.3H52.05V30.71L65.63,48.3z M77.02,26.01L64.4,9.65h12.62V26.01z"/>
  	<path d="M94.98,48.78c-4.78,0-8.46-1.75-11.07-5.27c-2.6-3.51-3.9-8.35-3.9-14.51c0-6.17,1.3-11,3.9-14.51
  		c2.6-3.51,6.29-5.27,11.07-5.27V48.78z M113.16,29c0,6.17-1.3,11-3.9,14.51c-2.6,3.51-6.29,5.27-11.07,5.27V9.22
  		c4.78,0,8.46,1.76,11.07,5.27C111.85,18,113.16,22.83,113.16,29z"/>
  	<path d="M129.57,48.3h-13.74V9.65h13.74V48.3z M146.94,20.87c0,3.85-1.01,6.69-3.02,8.53c-2.01,1.84-5.11,2.75-9.28,2.75
  		l-1.82-0.05V9.7l1.82-0.05C142.84,9.65,146.94,13.39,146.94,20.87z"/>
  	<path d="M162.98,48.3h-13.74V9.7h13.74V48.3z M175.76,48.3h-11.44l11.44-17.85V48.3z"/>
  	<path d="M192.22,48.3H178.7V9.7h13.52V48.3z M201.63,36.16l-8.45-7.97l8.45-7.96V36.16z M206.71,24.56L193.34,9.7h13.37V24.56z
  		 M206.92,48.3h-13.58l13.58-17.37V48.3z"/>
  </g>
  </svg></a>
	<button class="navbar-toggler navbar-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="xi-bars"></span>
    <span class="xi-close"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInRight">
	  <ul class="navbar-nav ml-auto">
		<?php
		$sql = " select *
					from {$g5['menu_table']}
					where me_use = '1'
					  and length(me_code) = '2'
					order by me_order, me_id ";
		$result = sql_query($sql, false);
		$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
		$menu_datas = array();
		for ($i=0; $row=sql_fetch_array($result); $i++) {
			$menu_datas[$i] = $row;

			$sql2 = " select *
						from {$g5['menu_table']}
						where me_use = '1'
						  and length(me_code) = '4'
						  and substring(me_code, 1, 2) = '{$row['me_code']}'
						order by me_order, me_id ";
			$result2 = sql_query($sql2);
			for ($k=0; $row2=sql_fetch_array($result2); $k++) {
				$menu_datas[$i]['sub'][$k] = $row2;
			}
		}
		$i = 0;
		foreach( $menu_datas as $row ){
			if( empty($row) ) continue;
		?>
			<?php if($row['sub']['0']) { ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle en2 f16" href="<?php echo $row['me_link']; ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
					<?php echo $row['me_name'] ?>
					</a>
						<!-- 서브 -->
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
							<?php
							// 하위 분류
							$k = 0;
							foreach( (array) $row['sub'] as $row2 ){

							if( empty($row2) ) continue;

							?>
							<a class="dropdown-item ko1 f15 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>

							<?php
							$k++;
							}   //end foreach $row2

							if($k > 0)
							echo '</ul>'.PHP_EOL;
							?>
			<?php }else{?>
				<li class="nav-item">
				<a class="nav-link en2 f16" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
				</li>
			<?php }?>
		</li>

		<?php
		$i++;
		}   //end foreach $row

		if ($i == 0) {  ?>
			<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
		<?php } ?>
		<li class="nav-item dropdown login">
		  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			LOGIN
		  </a>
		  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">

			<?php if($is_admin) { ?><a class="dropdown-item" href="<?php echo G5_URL?>/adm">관리자</a><?php } ?>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/new.php">새글</a>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/qalist.php">1:1문의</a>
			<?php if($is_member) { ?>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a>
			<?php }else{ ?>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/login.php">로그인</a>
			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/register.php">회원가입</a>
			<?php } ?>
		  </div>
		</li>
	  </ul>
	</div>
  </div>
  <div class="user_login">
    <ul>
      <?php if($is_member) { ?>
        <li><a href="<?php echo G5_URL?>/bbs/logout.php">logout</a></li>
        <li class="login_mypage"><a href="/ssople/adm/"><i class="xi-user-o"></i></a></li>
      <?php }else{ ?>
        <li><a href="<?php echo G5_URL?>/bbs/login.php">login</a></li>
        <li><a href="<?php echo G5_URL?>/bbs/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> register</a></li>

      <?php }?>
    </ul>
  </div>
</nav>



<!-------------------------- 각 상단배너들 -------------------------->
<?php include_once(G5_THEME_PATH.'/top_banner.php');?>
<!-------------------------- ./각 상단배너들 -------------------------->
