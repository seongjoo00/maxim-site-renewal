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
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/t_product.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="../css/m_product.css" media="screen and (max-width:767px)">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/basic.js"></script>
    <script>
    
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
                $('.tap_menu li a').removeClass('color');
                $(this).find('a').addClass('color');
                $('.tabcontent').removeClass('current');
                $('#' + activeTab).addClass('current');
			});
		});
    </script>
</head>
<body>
    <div class="skip_menu">
        <a href="#">로그인 바로가기</a> 
        <a href="#">회원가입 바로가기</a>
        <a href="#">메인제품 바로가기</a>
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
                            <a href="product.php">PRODUCT</a>
                                <ul class="m2">
                                    <li><a href="product.php">MAXIM</a></li>
                                    <li><a href="product_02.php">KANU</a></li>
                                    <li><a href="product_03.php">T.O.P</a></li>
                                    <li><a href="product_04.php">GRAND NOIR</a></li>
                                    <li><a href="product_05.php">TASSIMO</a></li>
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
                            <a href="../board/list.php">NEWS & MEDIA</a>
                                <ul class="m4">
                                    <li><a href="../board/list.php">NEWS & NOTICE</a></li>
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
                                        <li><a href="product.php">MAXIM</a></li>
                                        <li><a href="product_02.php">KANU</a></li>
                                        <li><a href="product_03.php">T.O.P</a></li>
                                        <li><a href="product_04.php">GRAND NOIR</a></li>
                                        <li><a href="product_05.php">TASSIMO</a></li>
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
                                        <li><a href="../board/list.php">NEWS & NOTICE</a></li>
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
        <div class="top_image"><img src="../images/product_01.jpg" alt="product이미지"></div>

        <div class="main_cont">
            <ul class="tap_menu">
                <li class="tap1"><a href="javascript::">MAXIM</a></li>
                <li class="tap2"><a href="javascript::">KANU</a></li>
                <li class="tap3"><a href="javascript::">T.O.P</a></li>
                <li class="tap4"><a class="color" href="javascript::">GRAND NOIR</a></li>
                <li class="tap5"><a href="javascript::">TASSIMO</a></li>
            </ul>
            
            <div class="product_wrap">
                <div id="tap1" class="tabcontent">
                    <ul class="location">
                        <li class="lc1">HOME</li>
                        <li class="lc2">PRODUCT</li>
                        <li class="lc3">MAXIM</li>
                    </ul>

                    <h2>MAXIM</h2>
                    <p class="txt">맥심의 다양한 제품들을 만나보세요.</p>
                    <div class="pro_inner">
                        <ul>
                            <li><img src="../images/imgProduct01.jpg" alt="Original"></li>
                            <li><img src="../images/imgProduct03.jpg" alt="Original"></li>
                            <li><img src="../images/imgProduct04.jpg" alt="Original"></li>
                            <li><img src="../images/imgProduct05.jpg" alt="Mocha Gold"></li>
                            <li><img src="../images/imgProduct02.jpg" alt="Original"></li>
                            <li><img src="../images/imgProduct06.jpg" alt="Mocha Gold"></li>
                            <li><img src="../images/imgProduct07.jpg" alt="Mocha Gold"></li>
                            <li><img src="../images/imgProduct08.jpg" alt="Mocha Gold"></li>
                            <li><img src="../images/imgProduct09.jpg" alt="Mocha Gold Light"></li>
                            <li><img src="../images/imgProduct10.jpg" alt="Mocha Gold Simple Latte"></li>
                            <li><img src="../images/imgProduct18.jpg" alt="WHITE GOLD"></li>
                            <li><img src="../images/imgProduct19.jpg" alt="ARABICA 100"></li>
                            <li><img src="../images/imgProduct20.jpg" alt="ARABICA 100"></li>
                            <li><img src="../images/imgProduct21.jpg" alt="ARABICA 100"></li>
                            <li><img src="../images/imgProduct22.jpg" alt="ARABICA 100"></li>
                            <li><img src="../images/imgProduct23.jpg" alt="ICE COFFEE"></li>
                            <li><img src="../images/imgProduct24.jpg" alt="ICE COFFEE"></li>
                            <li><img src="../images/imgProduct25.jpg" alt="WELL-BEING 1/2 CALORIES"></li>
                            <li><img src="../images/imgProduct26.jpg" alt="WELL-BEING 1/2 CALORIES"></li>
                            <li><img src="../images/imgProduct27.jpg" alt="MAXIM CAFE"></li>
                            <li><img src="../images/imgProduct28.jpg" alt="BLACK MIX"></li>
                            <li><img src="../images/imgProduct29.jpg" alt="DECAFFEINATED"></li>
                        </ul>
                    </div>
                </div>

                <div id="tap2" class="tabcontent">
                    <ul class="location">
                        <li class="lc1">HOME</li>
                        <li class="lc2">PRODUCT</li>
                        <li class="lc3">KANU</li>
                    </ul>

                    <h2>KANU</h2>
                    <p class="txt">맥심의 다양한 제품들을 만나보세요.</p>
                    <div class="pro_inner">
                        <ul>
                            <li><img src="../images/imgProduct11.jpg" alt="KANU"></li>
                            <li><img src="../images/imgProduct12.jpg" alt="KANU"></li>
                            <li><img src="../images/imgProduct13.jpg" alt="KANU MINI"></li>
                            <li><img src="../images/imgProduct14.jpg" alt="KANU MINI"></li>
                            <li><img src="../images/imgProduct15.jpg" alt="KANU LATTE"></li>
                            <li><img src="../images/imgProduct16.jpg" alt="KANU DOUBLESHOT LATTE"></li>
                            <li><img src="../images/imgProduct17.jpg" alt="KANU DECAFFEINE"></li>
                        </ul>
                    </div>
                </div>

                <div id="tap3" class="tabcontent">
                    <ul class="location">
                        <li class="lc1">HOME</li>
                        <li class="lc2">PRODUCT</li>
                        <li class="lc3">T.O.P</li>
                    </ul>

                    <h2>T.O.P</h2>
                    <p class="txt">맥심의 다양한 제품들을 만나보세요.</p>
                    <div class="pro_inner">
                        <ul>
                            <li><img src="../images/imgProduct30.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct31.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct32.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct43.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct44.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct45.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct46.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct47.jpg" alt="TOP"></li>
                            <li><img src="../images/imgProduct48.jpg" alt="TOP"></li>
                        </ul>
                    </div>
                </div>

                <div id="tap4" class="tabcontent current">
                    <ul class="location">
                        <li class="lc1">HOME</li>
                        <li class="lc2">PRODUCT</li>
                        <li class="lc3">GRAND NOIR</li>
                    </ul>

                    <h2>GRAND NOIR</h2>
                    <p class="txt">맥심의 다양한 제품들을 만나보세요.</p>
                    <div class="pro_inner">
                        <ul>
                            <li><img src="../images/imgProduct33.jpg" alt="GRAND NOIR"></li>
                            <li><img src="../images/imgProduct34.jpg" alt="GRAND NOIR"></li>
                            <li><img src="../images/imgProduct35.jpg" alt="GRAND NOIR"></li>
                            <li><img src="../images/imgProduct36.jpg" alt="GRAND NOIR"></li>
                        </ul>
                    </div>
                </div>

                <div id="tap5" class="tabcontent">
                    <ul class="location">
                        <li class="lc1">HOME</li>
                        <li class="lc2">PRODUCT</li>
                        <li class="lc3">TASSIMO</li>
                    </ul>

                    <h2>TASSIMO</h2>
                    <p class="txt">맥심의 다양한 제품들을 만나보세요.</p>
                    <div class="pro_inner">
                        <ul>
                            <li><img src="../images/imgProduct37.jpg" alt="TASSIMO ESPRESSO"></li>
                            <li><img src="../images/imgProduct38.jpg" alt="TASSIMO ESPRESSO"></li>
                            <li><img src="../images/imgProduct39.jpg" alt="TASSIMO ESPRESSO"></li>
                            <li><img src="../images/imgProduct40.jpg" alt="TASSIMO ESPRESSO"></li>
                            <li><img src="../images/imgProduct41.jpg" alt="TASSIMO ESPRESSO"></li>
                            <li><img src="../images/imgProduct42.jpg" alt="TASSIMO ESPRESSO"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
                                    
        

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