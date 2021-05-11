<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!--적용테마 : ety_theme_company -->




<!-------------------------- ./슬라이드 -------------------------->
<div class="mainSlide">
  <?php echo latest('theme/pic_basic_owl','gallery',4,100);?>
</div>





<!-------------------------- ./폼태그 -------------------------->

<div class="reservation">
    <form action="index.html" method="get">
      <fieldset>
        <legend>빠른 예약하기</legend>
        <dl class="res_text container">
          <dt>맞춤 파티룸 추천</dt>
          <dd>
            <ul>
              <li>
                <label for="area"><span>지역 : </span></label>
                <input type="text" name="area" id="area">
              </li>
              <li>
                <label for="number"><span>인원 : </span></label>
                <input type="text" name="number" id="number">
              </li>
            </ul>
          </dd>
          <button type="button" name="button"><i class="xi-search"></i><span class="hidden">찾기</span></button>
        </dl>
      </fieldset>
    </form>
</div>



<!-------------------------- ./지역 -------------------------->
<div class="re_party">
  <ul>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=hong"><span class="xi-maker"></span>홍대 / 신촌</a>
    </li>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=kangnam"><span class="xi-maker"></span>강남 / 사당/ 신림</a>
    </li>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=dangsan"><span class="xi-maker"></span>당산 / 노원</a>
    </li>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=cungju"><span class="xi-maker"></span>청주</a>
    </li>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=busan"><span class="xi-maker"></span>부산 서면</a>
    </li>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=suwon"><span class="xi-maker"></span>수원 인계동</a>
    </li>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=mungdong"><span class="xi-maker"></span>명동 한성대입구</a>
    </li>
  </ul>
</div>
<div class="mobile_re_party">
  <ul>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=hong"><span class="xi-maker"></span>홍대 / 신촌</a>
    </li>
    <li>
      <a href="/ssople/bbs/board.php?bo_table=kangnam"><span class="xi-maker"></span>강남 / 사당/ 신림</a>
    </li>

    <li>
      <select class="re_party_more" name="re_party_more">
        <option class="sub_more" value="">더보기</option>
        <option class="sub_more" value="">청주</option>
        <option class="sub_more" value="">부산/서면</option>
        <option class="sub_more" value="">수원 인계동</option>
        <option class="sub_more" value="">명동</option>
      </select>
    </li>
  </ul>
</div>

<!-------------------------- 파티룸 -------------------------->
<div class="partyRoom section container mt-md-5 mb-md-5">
  <h3 class="margin-bottom-50 partyRoom_header">PARTY ROOM</h3>


        <?php
        $options = array();
        $options['thumb_w'] = 400;    //썸네일( width : 210 )
        $options['thumb_h'] = 300;    //썸네일( height : 150 )
        $options['line']    = 1;    //제목+내용 라인수(기본:1)
        $options['design'] = 1;        //네비디자인(기본 : 1 )
        $options['items'] = 3;
        $options['margin'] = 10;
        echo latest('/pic_owl.carousel', 'hong', 6, 23, '', $options);
        ?>

</div>





<div class="guide">
  <div class="container">
    <a href="#"><span>파티룸 이용안내</span></a>
    <div class="guide_contents">
      <ul>
        <li class="guide_precautions"><a href="/ssople/bbs/content.php?co_id=intro"><i class="xi-info-o"></i></a><span>주의사항 확인!</span></li>
        <li class="guide_download"><a href="#"><i class="xi-library-add"></i></a><span>어플 다운로드</span></li>
        <li class="guide_cake"><a href="#"><i class="xi-emoticon-smiley-o"></i></a><span>재미있게 놀기!</span></li>
      </ul>
    </div>
    <p>* 주의사항을 반드시 읽어보신 후 예약을 진행해주세요 *</p>
  </div>
</div>



<!-------------------------- 테마소개 + 유튜브영상 -------------------------->


<div class="sec_youtube py-5 ">
  <div class="youtube_text container">
    <h3 class="hidden">youtube</h3>
  </div>

	<div class="container">
	  <div id="youtube" class="row">
		<div class="col-lg-12">
      <div class="youtube_thum">
        <iframe width="100%" height="100%" src="//www.youtube.com/embed/gf8S7ZunAmw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
		</div>
    <div class="youtube_hash container">
      <ul>
        <li><a href="#">#최대규모</a></li>
        <li><a href="#">#파티룸</a></li>
        <li><a href="#">#성공적</a></li>
        <li><a href="#">#힐링</a></li>
      </ul>
    </div>


	  </div>
	</div>
</div>






<!-------------------------- /리뷰 -------------------------->
<div class="review container margin-top-80 margin-bottom-80">
	<h3 class="review_header">REVIEW</h3>
  <div class="best_reivew">
    <h4><i class="xi-crown"></i> REVIEW<span> BEST3 </span><i class="xi-crown"></i></h4>
    <a href="/ssople/bbs/board.php?bo_table=review" class="review_plus"><i class="xi-plus-thin"></i><span class="hidden">더보기</span></a>
  </div>
	<!-- LATEST : pic_basic_company -->
	<?php echo latest('theme/pic_basic_company', 'best_reivew', 3, 20); ?>

  <div class="review_foot">
    <?php
    $options = array();
    $options['thumb_w'] = 400;    //썸네일( width : 210 )
    $options['thumb_h'] = 300;    //썸네일( height : 150 )
    $options['line']    = 1;    //제목+내용 라인수(기본:1)
    $options['design'] = 1;        //네비디자인(기본 : 1 )
    $options['items'] = 6;
    $options['margin'] = 10;
    echo latest('/pic_owl.carousel', 'review', 6, 23, '', $options);
    ?>

  </div>
</div>



<div class="initial">
  <h3 class="hidden">창업 문의</h3>
  <div class="initial_warp container">
    <p>쏘플 파티룸과 함께 성장 할
      <br />
      파트너 공간주를 찾습니다.
    </p>
    <span class="initial_link"><a href="#">창업 문의하기</a></span>
  </div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
