<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>


  <div class="fix_btn">
    <ul>
      <li>
        <a href="//heemin.dothome.co.kr"><button type="button" name="button"><i class="xi-gift-o"></i><span>포트폴리오</span></button></a>
      </li>
      <li>
        <a href="/ssople/bbs/board.php?bo_table=reservation"><button type="button" name="button"><i class="xi-calendar-check"></i><span>예약 바로가기</span></button></a>
      </li>
      <li>
        <a href="/ssople/bbs/board.php?bo_table=qna"><button type="button" name="button"><i class="xi-call"></i><span>상담 / 문의</span></button></a>
        <p>카톡ID : blur1221
          <br />
           010-9318-7297
        </p>
      </li>
      <li>
        <a href="#"><button type="button" name="button"><i class="xi-arrow-up"></i><span class="hidden">탑버튼</span></button></a>
      </li>
    </ul>

  </div>
  <a href="#" class="mobile-topBtn"><i class="xi-arrow-up"></i><span class="hidden">탑버튼</a>

</body>
<script>
    AOS.init();
</script>
</html>
<?php echo html_end(); ?>
