<?php
    session_start();

    $sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/join_02.css">
    <link rel="stylesheet" href="../css/t_join_02.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="../css/m_join_02.css" media="screen and (max-width:767px)">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/basic.js"></script>
    <script src="../js/join_02.js"></script>
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
        <div class="main_cont">
            <h1>회원가입</h1>
            <p class="top_txt">맥심 사이트는 회원님의 소중한 개인정보를 회원님의 동의없이 공개 또는 제3자에게 제공하기 않습니다.</p>
            <form action="./members.php" name="join2" method="post" class="join2">
                <fieldset>
                    <legend>회원정보입력</legend>
                    <div class="join_wrap">
                        <div class="join_inner">
                            <div class="user_name">
                                <label for="uname">이름</label>
                                <input type="text" id="uname" name="uname">
                            </div>

                            <div class="user_id">
                                <label for="uid">이메일 주소 (아이디)</label>
                                <input type="text" id="uid" name="uid" readonly="readonly">
                                <input type="hidden" id="uid_hidden" name="uid_hidden" value="N">
                                <button type="button" onclick="check_id()">중복확인</button>
                            </div>

                            <div class="user_pwd">
                                <label for="pwd">비밀번호</label>
                                <input type="password" id="pwd" name="pwd">
                                <p>비밀번호는 영대소문자/숫자 조합,8~16자 조합입니다.</p>
                            </div>

                            <div class="user_repwd">
                                <label for="repwd">비밀번호 확인</label>
                                <input type="password" id="repwd" name="repwd">
                            </div>

                            <div class="email_agree">
                                <input type="hidden" id="email_ckeck_hidden" name="email_check" value="N">
                                <input type="checkbox" id="email_check" name="email_check" value="Y">
                                <label for="email_check"><span></span>이메일 수신에 동의합니다.</label>
                                <p>이메일 수신에 동의해 주셔야 뉴스레터 및 마이맥심 관련 다양한 소식을 받아 보실 수 있습니다.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="join_btn">
                        <button type="button" class="ok_btn" onclick="join_ok(this.form)">확인</button>
                        <button type="button" class="cancel_btn" onclick="cancel_btn()">취소</button>
                    </div>
                </fieldset>
            </form>
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