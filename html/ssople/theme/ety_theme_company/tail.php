<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>


	<?php

		// left_menu.php 에서 추가된 모든 게시판+페이지를 추가해주셔야 합니다.

		if($bo_table == 'notice' ||
		$bo_table == 'free' ||
		$bo_table == 'free_responsive' ||
		$bo_table == 'free_scroll' ||
		$pagename == "product-2.php" ||
		$pagename == "pages-1.php" ||
		$pagename == "pages-2.php"
		){
	?>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->

	<?php }?>



    <footer class="py-5 bg-dark">
		<div class="container footer">
			<div class="row">
				<div class="col-md-12 text-white text-left">
					<h2>HEEEMIN_NOTE</h2><!-- image or text  -->
					<p>
            그누보드를 활용하여 반응형으로 제작하였으며 최대한 소비자의 입장에서 편리하게 사용하고 소비까지 이어질 수 있도록 노력하였습니다.
            <br />
            끝까지 꼼꼼하게 봐주셔서 감사합니다. 보다 자세한 설명을 보고 싶으시다면 퀵메뉴에서 포토폴리오를 클릭해주세요
					</p>
					<p>
						<i class="xi-lightbulb-o"></i> 사용한 테마 : free_ety_business_1.5.7z<br />
						<i class="xi-lightbulb-o"></i> 사용한 플러그인 : pic_basic_owl / pic_basic_company / aos.js 등<br />
						<i class="xi-mail-o"></i> <a href="rlagmlals1221@naver.com" class="color-white">Email : rlagmlals1221@naver.com</a><br />
						<i class="xi-call"></i> 연락처:010-9318-7297<br />
					</p>

				</div>
			</div>
		</div><!--/container-->
    </footer>
	<div class="container-fluid bg-gray">
		<div class="col-md-12 text-white text-center">
				Copyright 김희민 NCS과정 수료 완료 &copy; <a href="//heemin.dothome.co.kr" target="_blank"><span class="color-white">http://heemin.dothome.co.kr</span></a>
		</div>
	</div><!-- /container -->


    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	var jQuery = $.noConflict(true);
	</script>
    <script src="<?php echo G5_THEME_URL?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/parallax/js/parallax.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/owlcarousel/js/owl.carousel.min.js"></script>
	<!-- countdown -->
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/kinetic.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/jquery.final-countdown.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/bootstrap-dropdownhover.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/custom.js"></script>
	<script>
		// $('.carousel').carousel({ interval: 1000 });
	</script>
	<script>
		// parallax-window 이미지를 수정해주세요.
		jQuery('.parallax-window').parallax({imageSrc: '//via.placeholder.com/1920x1080'});
	</script>
	<script>
		$(document).ready(function () {
			//owl
			jQuery(".owl-theme").owlCarousel({
				loop:true,
				margin:0,//이미지 사이의 간격
				nav:true,
        autoplay:true,
        autoplayTimeout:3000,
				responsive:{
					0:{
						items:1 // 모바일
					},
					600:{
						items:1 // 브라우저 600px 이하
					},
					1000:{
						items:1 // 브라우저 100px 이하
					}
				}
			});

			// countdown
			'use strict';
			jQuery('.countdown').final_countdown({
				'start': 1362139200,
				'end': 1388461320,
				'now': 1387461319
			});
		});
	</script>

<script>

</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
