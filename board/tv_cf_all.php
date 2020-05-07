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
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/tv_cf_all.css">
    <link rel="stylesheet" href="../css/t_tv_cf_all.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="../css/m_tv_cf_all.css" media="screen and (max-width:767px)">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/slick.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/basic.js"></script>
    <script src="../js/slick.min.js"></script>
    <script>
    /* slide */
    $(document).ready(function(){
        $('.video_tap').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows:true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        });

        $('.video_tap li').click(function() {
                var activeTab = $(this).find('a').attr('rel');
                $('#cf_tap iframe').attr("src","https://www.youtube.com/embed/"+activeTab);
                $('.video_tap li').css({backgroundPosition:'center 0'});
                $(this).css({backgroundPosition:'center -114px'});
        });

        $('.cf_tap li').click(function() {
                var i = $(this).index()+1;
                var url = "cf_on_tap"+i+".jpg";
                $(this).css("background-image","url(../images/"+url+")");
        });
    });

    $(document).ready( function() {
        $( 'html, body' ).scrollTop(200);
        return false;
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
    location.href="../login/logout.php"
    };
    
    /* tap_menu */
    $(function() {
			$('.tap_menu li').click(function() {
                var activeTab = $(this).attr('class');
                $('.tap_menu li').removeClass('current');
                $('.tap_menu li').find('a').removeClass('current');
                $(this).find('a').addClass('current');
                $('.tabcontent').removeClass('current');
                $(this).addClass('current');
				$('#' + activeTab).addClass('current');
			});
		});

        $(function() {
			$('.notice_wrap .paging a').click(function() {
                $(this).addClass('on');
			});
		});

</script>
</head>
<body>
    <div class="skip_menu">
        <a href="../login/login.php">로그인 바로가기</a> 
        <a href="../members/join_01.php">회원가입 바로가기</a>
        <a href="../product/product.php">메인제품 바로가기</a>
    </div>

    <header id="header" class="header">
        <div class="header_inner">
            <h1><a href="../index.php"><img src="../images/maxim_logo.png" alt="맥심"></a></h1>

            <?php if(!$sid){ ?>
                <a class="t_login" href="../login/login.php">로그인</a>
            <?php }else{ ?>
                <a class="t_login" href="../members/edit.php">마이페이지</a>
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
                            <a href="../product/product.php">PRODUCT</a>
                                <ul class="m2">
                                    <li><a href="../product/product.php">MAXIM</a></li>
                                    <li><a href="../product/product_02.php">KANU</a></li>
                                    <li><a href="../product/product_03.php">T.O.P</a></li>
                                    <li><a href="../product/product_04.php">GRAND NOIR</a></li>
                                    <li><a href="../product/product_05.php">TASSIMO</a></li>
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
                            <a href="list.php">NEWS & MEDIA</a>
                                <ul class="m4">
                                    <li><a href="list.php">NEWS & NOTICE</a></li>
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
                                        <li><a href="../product/product.php">MAXIM</a></li>
                                        <li><a href="../product/product_02.php">KANU</a></li>
                                        <li><a href="../product/product_03.php">T.O.P</a></li>
                                        <li><a href="../product/product_04.php">GRAND NOIR</a></li>
                                        <li><a href="../product/product_05.php">TASSIMO</a></li>
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
                                        <li><a href="list.php">NEWS & NOTICE</a></li>
                                        <li><a href="tv_cf_all.php">TV CF</a></li>
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
                                <li class="top1"><a href="../login/login.php">로그인</a></li>
                                <li class="top6"><a href="../members/join_01.php">회원가입</a></li>
                                <?php }else{ ?>
                                <li class="top5"><a href="javascript::" onclick="logout()">로그아웃</a></li>
                                <li class="top2"><a href="../members/edit.php">마이페이지</a></li>
                                <?php }; ?>
                                <li class="top3"><a href="https://www.dongsuh.co.kr/05_client/faq.asp" target="_blank">고객센터</a></li>
                                <li class="top4"><a href="https://www.facebook.com/maxim.kanu?fref=ts" target="_blank">페이스북</a></li>
                            </ul>
                        </div>
                    </section>
    </header>

    <main id="content" class="content">
        <div class="top_image"><img src="../images/news_notice.jpg" alt="product이미지"></div>

        <div class="main_cont">
            <ul class="tap_menu">
                <li class="tap1"><a href="list.php">NEWS & NOTICE</a></li>
                <li class="tap2 current"><a class="current" href="tv_cf_all.php">TV CF</a></li>
                <li class="tap3"><a href="javascript::">MAXIM CHANNEL</a></li>
            </ul>
            
            <div class="notice_wrap">
                <div id="tap2">
                    <ul class="location">
                        <li class="lc1">HOME</li>
                        <li class="lc2">NEWS & MEDIA</li>
                        <li class="lc3">TV CF</li>
                    </ul>

                    <h2>TV CF</h2>
                    <p class="txt">맥심 TV CF를 감상해보세요.</p>
                    <div class="notice_inner">
                        <div style="border-top:3px solid #53382d">
                            <ul class="cf_tap">
                                <li><a href="javascript::">all</a></li>
                                <li><a href="javascript::">맥심 브랜드</a></li>
                                <li><a href="javascript::">KANU</a></li>
                                <li><a href="javascript::">맥심 모카 골드</a></li>
                                <li><a href="javascript::">맥심 화이트 골드</a></li>
                                <li><a href="javascript::">T.O.P</a></li>
                                <li><a href="javascript::">TASSIMO</a></li>
                                <li><a href="javascript::">ARABICA 100</a></li>
                                <li><a href="javascript::">맥심 아이스커피 믹스</a></li>
                                <li><a href="javascript::">기타</a></li>
                                <li><a href="javascript::">과거 맥심광고</a></li>
                            </ul>

                            <section class="cf_video">
                                <h3 class="video_txt">cf video</h3>

                                <div id="cf_tap">
                                    <iframe width="1280" height="720" title="심플라떼 모델편" src="https://www.youtube.com/embed/XyKVogZA8bI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <h3 class="cf_title">심플 라떼 모델편</h3>
                                    <p class="cf_txt">맛있는 라떼는 사실 간단하다.</p>
                                </div>
                            </section><!-- cf_video -->

                            
                        <div class="video_slide">
                            <ul class="video_tap">
                                <li class="cf_tap1"><a href="#none" rel="XyKVogZA8bI">심플라떼 모델편</a></li>
                                <li class="cf_tap2"><a href="#none" rel="Q89KiKorbfU">심플라떼 제품편</a></li>
                                <li class="cf_tap3"><a href="#none" rel="Yr9LY2vB6Ok">맥심 화이트골드 30</a></li>
                                <li class="cf_tap4"><a href="#none" rel="MO93hkgER-I">카누 디카페인 거실 편</a></li>
                                <li class="cf_tap5"><a href="#none" rel="oAsG9qJeY1M">카누 티라미수 라떼 본편 (30초)</a></li>
                                <li class="cf_tap6"><a href="#none" rel="5lLbajKkbQ0">카누 티라미수 라떼 6초 A</a></li>
                                <li class="cf_tap7"><a href="#none" rel="cNWuQg_ycv8">맥심x키티버니포니 30초</a></li>
                                <li class="cf_tap8"><a href="#none" rel="Ouly6tTA-Pk">박건태님의 T.O.P 열정광고</a></li>
                                <li class="cf_tap9"><a href="#none" rel="xMuwHA8Q0SI">양혜지님의 T.O.P 열정광고</a></li>
                                <li class="cf_tap10"><a href="#none" rel="pRuRRetCIHg">카누 비치카페 INVITATION 30초</a></li>
                            </ul>
                            <button type="button" class="prev">prev</button>
                            <button type="button" class="next">next</button>
                        </div>
                        </div>
                    </div><!-- notice_inner -->
                </div><!-- tap2 -->
            </div><!-- main_cont -->
        </div><!-- content -->
                                    
        

        <aside class="side_menu">
            <a href="#"><img src="../images/aside.jpg" alt="top"></a>
        </aside>
    </main>
    
    <div class="footer_wrap">
    <footer id="footer" class="footer">
            <h2>서비스 이용안내</h2>
                <section class="terms">
                    <h3>약관 및 정책</h3>
                        <ul>
                            <li class="t_1"><a href="#">개인정보처리방침</a></li>
                            <li class="t_2"><a href="#">이용약관</a></li>
                            <li class="t_3"><a href="#">이메일무단수집거부</a></li>
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