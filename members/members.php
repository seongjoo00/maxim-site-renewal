<?php
   $uname =  $_POST["uname"];
    $uid =  $_POST["uid"];
    $pwd =  $_POST["pwd"];
    $email_agree =  $_POST["email_check"];
    $reg_date = date("Y-m-d");

    include "../inc/dbcon.php";

    $sql = "insert into members(uname,uid,pwd,email_agree,reg_date)values('$uname','$uid','$pwd','$email_agree','$reg_date');";

    mysqli_query($dbcon,$sql);

    mysqli_close($dbcon);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/join_03.css">
    <link rel="stylesheet" href="../css/t_join_03.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="../css/m_join_03.css" media="screen and (max-width:767px)">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/basic.js"></script>
</head>
<body>
    <div class="skip_menu">
        <a href="../login/login.php">로그인 바로가기</a> 
        <a href="join_01.php">회원가입 바로가기</a>
        <a href="../product/product.php">메인제품 바로가기</a>
    </div>

    <header id="header" class="header">
        <div class="header_inner">
            <h1><a href="../index.php"><img src="../images/maxim_logo.png" alt="맥심"></a></h1>

            <a class="t_login" href="../login/login.php">로그인</a>
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
                                <li class="top1"><a href="../login/login.php">로그인</a></li>
                                <li class="top2"><a href="../members/join_01.php">회원가입</a></li>
                                <li class="top3"><a href="https://www.dongsuh.co.kr/05_client/faq.asp" target="_blank">고객센터</a></li>
                                <li class="top4"><a href="https://www.facebook.com/maxim.kanu?fref=ts" target="_blank">페이스북</a></li>
                            </ul>
                        </div>
                    </section>
    </header>

    <main id="content" class="content">
        <div class="top_image"><img src="../images/join_top_image.jpg" alt="회원가입 이미지"></div>
        <section class="main_cont">
            <h1>회원가입</h1>
            <div class="maim_inner">
                    <h2>마이맥심의 <span>회원가입</span>을 환영합니다!</h2>

                    <p class="txt1">안녕하세요! 회원가입이 완료되었습니다.</p>
                    <p class="txt2">비밀번호 변경을 원하실 경우 회원정보 수정에서 변경이 가능합니다.</p>

                    <p class=user_id><?php echo $uid ?></p>

                    <div class="location_btn">
                        <a class="location_login" href="../login/login.php">로그인</a>
                        <a class="location_main" href="../index.php">메인으로 이동</a>
                    </div>
            </div>
        </section>  

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