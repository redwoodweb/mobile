<?php
$layout = 'mobile common';
include 'header.php';
?>
    <!-- content : 콘텐츠 영역 -->
    <div class="content">
        <!-- content_inner -->
        <div class="content_inner">
            <?php
                //해당 컴포넌트 :
                include 'components/set_alarm.php';//로보 알람설정 관리
            ?>
        </div>
        <!-- //.content_inner -->
    </div>
    <!-- //.content -->
