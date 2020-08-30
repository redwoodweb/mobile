<?php
$layout = 'mobile common';
include 'header.php';
?>
    <!-- 네비게이션 없을 경우 헤더 -->
    <header>
        <div class="logo">
            <a href="/" alt="홈으로 가기"><img src="public/img/top_logo.png" alt="GST 로고 이미지"></a>
        </div>
    </header>
    <!-- //.네비게이션 없을 경우 헤더 -->
    <!-- content : 콘텐츠 영역 -->
    <div class="content">
        <!-- content_inner -->
        <div class="content_inner">
            <?php
                //해당 컴포넌트 :
                include 'components/login.php';//로그인
                //include 'components/sign_up.php';//회원가입
            ?>
        </div>
        <!-- //.content_inner -->
    </div>
    <!-- //.content -->
