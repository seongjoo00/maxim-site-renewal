<?php
    session_start();

    $sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>맥심 커피</title>
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/t_index.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="./css/m_index.css" media="screen and (max-width:767px)">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="./css/slick.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/basic.js"></script>
    <script src="./js/slick.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            dots:true
        });
        $(".naver_slider").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            dots:true
        });
        $('.play').on('click',function() {
	        $('.slider').slick('slickPlay');
        });
            $('.pause').on('click',function() {
	    $('.slider').slick('slickPause');
        });

        $(".play").click(function(){
            $(this).hide();
            $(".pause").show();
        });
        $(".pause").click(function(){
            $(this).hide();
            $(".play").show();
        });
    });

    /* side_menu_scroll */
    $(document).scroll(function () {
        var y = $(this).scrollTop();
            if (y >= 160) {
            $('.side_menu').addClass('fixed');
            } else {
            $('.side_menu').removeClass('fixed');
            };
    });
    function logout(){
    location.href="login/logout.php";
};

    </script>
</head>
<body>
    <div class="skip_menu">
        <a href="login/login.php">로그인 바로가기</a> 
        <a href="members/join_01.php">회원가입 바로가기</a>
        <a href="product/product.php">메인제품 바로가기</a>
    </div>

    <header id="header" class="header">
        <div class="header_inner">
            <h1><a href="index.php"><img src="./images/maxim_logo.png" alt="맥심"></a></h1>

            <?php if(!$sid){ ?>
                <a class="t_login" href="login/login.php">로그인</a>
            <?php }else{ ?>
                <a class="t_login" href="members/edit.php">마이페이지</a>
            <?php }; ?>
            <a class="all_menu" href="javascript::">메뉴전체보기</a>
            
            
            <nav class="p_gnb">
                <h2>주요메뉴</h2>
                    <ul>
                        <li>
                            <a href="#none">ABOUT MAXIM</a>
                                <ul class="m1">
                                    <li><a href="#none">BRAND INFO</a></li>
                                    <li><a href="#none">BRAND HISTORY</a></li>
                                    <li><a href="#none">BRAND SLOGAN</a></li>
                                </ul>
                        </li>    

                        <li>
                            <a href="product/product.php">PRODUCT</a>
                                <ul class="m2">
                                    <li><a href="product/product.php">MAXIM</a></li>
                                    <li><a href="product/product_02.php">KANU</a></li>
                                    <li><a href="product/product_03.php">T.O.P</a></li>
                                    <li><a href="product/product_04.php">GRAND NOIR</a></li>
                                    <li><a href="product/product_05.php">TASSIMO</a></li>
                                </ul>
                        </li>

                        <li>
                            <a href="#none">EVENT</a>
                                <ul class="m3">
                                    <li><a href="#none">진행중인 이벤트</a></li>
                                    <li><a href="#none">지난 이벤트</a></li>
                                </ul>
                        </li>

                        <li>
                            <a href="board/list.php">NEWS & MEDIA</a>
                                <ul class="m4">
                                    <li><a href="board/list.php">NEWS & NOTICE</a></li>
                                    <li><a href="#none">TV CF</a></li>
                                    <li><a href="#none">MAXIM CHANNEL</a></li>
                                </ul>
                        </li>

                        <li>
                                <a href="#none">CUSTOMER</a>
                                <ul class="m5">
                                    <li><a href="#none">고객센터</a></li>
                                </ul>
                        </li>
                    </ul>
                </nav>

            <div class="nav_wrap">
                <a class="menu_close" href="javascript::">메뉴닫기</a>
                <nav class="t_gnb">
                    <h2>주요메뉴</h2>
                        <ul>
                            <li>
                                <a href="javascript::">ABOUT MAXIM</a>
                                    <ul class="m1">
                                        <li><a href="#none">BRAND INFO</a></li>
                                        <li><a href="#none">BRAND HISTORY</a></li>
                                        <li><a href="#none">BRAND SLOGAN</a></li>
                                    </ul>
                            </li>    

                            <li>
                                <a href="javascript::">PRODUCT</a>
                                    <ul class="m2">
                                        <li><a href="product/product.php">MAXIM</a></li>
                                        <li><a href="product/product_02.php">KANU</a></li>
                                        <li><a href="product/product_03.php">T.O.P</a></li>
                                        <li><a href="product/product_04.php">GRAND NOIR</a></li>
                                        <li><a href="product/product_05.php">TASSIMO</a></li>
                                    </ul>
                            </li>

                            <li>
                                <a href="javascript::">EVENT</a>
                                    <ul class="m3">
                                        <li><a href="#none">진행중인 이벤트</a></li>
                                        <li><a href="#none">지난 이벤트</a></li>
                                    </ul>
                            </li>

                            <li>
                                <a href="javascript::">NEWS & MEDIA</a>
                                    <ul class="m4">
                                        <li><a href="board/list.php">NEWS & NOTICE</a></li>
                                        <li><a href="#none">TV CF</a></li>
                                        <li><a href="#none">MAXIM CHANNEL</a></li>
                                    </ul>
                            </li>

                            <li>
                                    <a href="javascript::">CUSTOMER</a>
                                    <ul class="m5">
                                        <li><a href="#none">고객센터</a></li>
                                    </ul>
                            </li>
                        </ul>
                </nav>
            </div>
        </div>          
            <div class="gnb_bg"></div>
            <div class="tgnb_bg"></div>

                <section class="top_menu">
                    <h2>사용자메뉴</h2>
                        <div>
                            <ul>
                                <?php if(!$sid){ ?>
                                <li class="top1"><a href="login/login.php">로그인</a></li>
                                <li class="top6"><a href="./members/join_01.php">회원가입</a></li>
                                <?php }else{ ?>
                                <li class="top5"><a href="javascript::" onclick="logout()">로그아웃</a></li>
                                <li class="top2"><a href="members/edit.php">마이페이지</a></li>
                                <?php }; ?>
                                <li class="top3"><a href="https://www.dongsuh.co.kr/05_client/faq.asp" target="_blank">고객센터</a></li>
                                <li class="top4"><a href="https://www.facebook.com/maxim.kanu?fref=ts" target="_blank">페이스북</a></li>
                            </ul>
                        </div>
                    </section>
    </header>

    <main id="content" class="content">
        <section class="main_images">
            <h2>메인이미지</h2>
                <ul class="slider">
                    <li>
                            <img src="./images/main_image1.jpg" alt="6초라떼 맥심 모카골드 심플라떼" class="main_image1">
                            <img src="./images/m_main_image1.jpg" alt="6초라떼 맥심 모카골드 심플라떼" class="m_main_image1">
                    </li>
                    <li>
                            <img src="./images/main_image2.jpg" alt="세상이 기다렸던 스위한 콜라보 KANU 티라미수 라떼" class="main_image2">
                            <img src="./images/m_main_image2.jpg" alt="세상이 기다렸던 스위한 콜라보 KANU 티라미수 라떼" class="m_main_image2">
                    </li>
                    <li>
                            <img src="./images/main_image3.jpg" alt="처음부터 끝까지 우유로 부드럽게 MAXIM WHITE GOLD" class="main_image3">
                            <img src="./images/m_main_image3.jpg" alt="처음부터 끝까지 우유로 부드럽게 MAXIM WHITE GOLD" class="m_main_image3">
                    </li>
                </ul>
                <div class="slider_play">
                    <button class="play">play</button>
                    <button class="pause">Pause</button>
                </div>
        </section>
    <div class="main_cont">
        <div class="cont_top">
            <section class="maxim_all_pro">
                <h2>MAXIM 전제품</h2>
                    <a href="product/product.php">
                        <img src="./images/maxim_allpro.png" alt="MAXIM 전제품 더보기" class="maxim_allpro">
                        <img src="./images/m_maxim_allpro.png" alt="MAXIM 전제품 더보기" class="m_maxim_allpro">
                    </a>
            </section>

            <section class="kanu_video">
                <h2>카누광고</h2>
                <iframe class="video" width="760" height="480" title="카누광고" src="https://www.youtube.com/embed/UZL-WsqHBl0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        </div>

        <div class="cont_middle">

        <section class="mocha_radio">
            <h2>모카라디오 광고</h2>
                <img src="./images/mocha_radio.jpg" alt="이나영과 함께하는 모카라디오" class="mocha_img">
                <img src="./images/t_mocha_radio.jpg" alt="이나영과 함께하는 모카라디오" class="m_mocha_img">
        </section>

        <section class="maxim_cf">
            <h2>맥심 TV CF</h2>
            <img src="./images/maxim_cf_ico.png" alt="맥심 CF TV 아이콘">
            <a href="#none">맥심 TV CF 더보기</a>
        </section>

        <section class="news_notice">
                <h2>NEWS & NOTICE</h2>
                    <ul>
                        <li>
                            <a href="#">
                             [소식] 동서식품,"제21회 맥심커피배 입신최강전" 개최
                             <span>2019.12.24</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="#">[소식] 동서식품, 2019 대한민국광고대상 2개 부문 수상
                            <span>2019.12.12</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="#">[소식] 동서식품, 카누 라떼 팝업스토어 ‘카누 스위트 카페’ 오픈
                            <span>2019.11.26</span>
                            </a>
                            
                        </li>

                        <li>
                            <a href="#">[소식] 동서식품, 음악 꿈나무 지원하는 ‘제12회 맥심 사랑의 향기'개최
                            <span>2019.11.26</span>
                            </a>
                            
                        </li>
                    </ul>
                    <a href="#" class="news_notice_more">더보기</a>
        </section><!-- news_notice -->

        </div><!-- cont_middle -->

        <div class="cont_bottom">
            <section class="flagship_store">
                <h2>맥심 플래그쉽 스토어</h2>
                    <img src="./images/flagship_store.jpg" alt="도심 속 정원, 숲속 커피 공장 맥심 브랜드 플래그쉽 스토어 Plant in Plant" class="flagship_img">
                    <img src="./images/t_flagship_store.jpg" alt="도심 속 정원, 숲속 커피 공장 맥심 브랜드 플래그쉽 스토어 Plant in Plant" class="t_flagship_img">
            </section>
        

            <section class="naver_cafe">
                <h2>맥심 네이버 카페</h2>
                <ul class="naver_slider">
                    <li><a href="https://cafe.naver.com/coffeeinlife" target="_blank"><img src="./images/naver_cafe1.jpg" alt="네이버카페 그녀들의 커피 이야기"></a></li>
                    <li><a href="https://cafe.naver.com/tassimokorea" target="_blank"><img src="./images/naver_cafe2.jpg" alt="네이버카페 MAXIM WITH TASSIMO"></a></li>
                </ul>
            </section>
        </div>
    </div>    

        <aside class="side_menu">
            <a href="javascript::"><img src="./images/aside.jpg" alt="top"></a>
        </aside>
    </main>
    
    <div class="footer_wrap">
    <footer id="footer" class="footer">
            <h2>서비스 이용안내</h2>
                <section class="terms">
                    <h3>약관 및 정책</h3>
                        <ul>
                            <li class="t_1"><a href="#none">개인정보처리방침</a></li>
                            <li class="t_2"><a href="#none">이용약관</a></li>
                            <li class="t_3"><a href="#none">이메일무단수집거부</a></li>
                        </ul>
                </section>

                <section class="footer_address">
                    <h3>주소</h3>
                        <address>서울시 마포구 독막로 324 동서빌딩</address>
                        <p class="call">전국대표전화번호<a class="tel" tabIndex="-1" href="tel:15882333">1588-2333</a></p>
                        
                </section>
                
                <p class="copy_right">2013 DONG SUH FOOD,RIGHT RESERVED</p>

                <section class="footer_link">
                    <h3 class="footer_click"><a href="javascript::">FAMILY SITE</a></h3>
                        <ul>
                            <li><a href="https://www.dongsuh.co.kr/2017/00_main/main.asp" target="_blank">동서식품</a></li>
                            <li><a href="http://www.maximkanu.co.kr/kanu/" target="_blank">MAXIM Kanu</a></li>
                            <li><a href="https://www.facebook.com/maximmocha/" target="_blank">MAXIM Mocha Gold</a></li>
                            <li><a href="https://www.facebook.com/maximmocha" target="_blank">MAXIM White Gold</a></li>
                            <li><a href="https://www.facebook.com/maximtoptop?fref=ts" target="_blank">MAXIM T.O.P</a></li>
                            <li><a href="http://www.tassimo.co.kr/" target="_blank">MAXIM Tassimo</a></li>
                        </ul>
                </section>
    </footer>
    </div>            
    
    
</body>
</html>