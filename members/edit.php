<?php
    session_start();

    $sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

    if(!$sid){
        echo "<script type='text/javascript'>
        alert('로그인 사용자만 사용가능합니다.');
        history.back();
        </script>";
    };

    include "../inc/dbcon.php";

    $sql = "select * from members where uid='$sid';";
    $result = mysqli_query($dbcon,$sql);
    $array = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>맥심 커피</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="stylesheet" href="../css/t_edit.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="../css/m_edit.css" media="screen and (max-width:767px)">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/basic.js"></script>
    <script>
    function edit_ok(form){
    var pwd = document.getElementById("pwd").value.replace(/\s/g, "");
    var repwd = document.getElementById("repwd").value.replace(/\s/g, "");
    var email_check = document.getElementById("email_check");
    var email_ckeck_hidden = document.getElementById("email_ckeck_hidden");
    var reg_spc = /[`@~!#$%^&*|\\\'\";:\/?]/;
    var reg_gn = /[A-Z|a-z]/;
    var reg_num = /[0-9]/;
    var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;

    /* pwd */
    if(!pwd){
        alert("비밀번호를 입력해 주세요.");
        pwd.focus();
        return false;
    };
    var len = pwd.length;
    if(len < 8 || len > 16){
        alert("비밀번호는 8~16자 내외로 입력해 주세요.");
        pwd.focus();
        return false;
    };
    if(!reg_spc.test(pwd) || !reg_gn.test(pwd) || !reg_num.test(pwd)){
        alert("비밀번호는 영대소문자/숫자/특수문자 조합으로 입력해 주세요.");
        pwd.focus();
        return false;
    };
    
    /* repwd */
    if(!repwd){
        alert("비밀번호를 확인을 입력해주세요.");
        repwd.focus();
        return false;
    };
    if(pwd != repwd){
        alert("비밀번호가 일치하지 않습니다.");
        repwd.focus();
        return false;
    };

    /* email_agree */
    if(email_check.checked){
        email_ckeck_hidden.disabled = true;
    };
    form.submit();
    };

    function cancel_btn(){
    location.href="../index.php";
    };
    function logout(){
    location.href="../login/logout.php"
    };

    $(document).ready(function(){
        $(".tap2").hover(function(){
        $(this).css({background:"#53382d"});
        $(this).find("a").css({color:"#fff"});
    },function(){
        $(this).css({background:"#fffbf4"});
        $(this).find("a").css({color:"#53382d"});
    });
    });
</script>
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

            <?php if(!$sid){ ?>
                <a class="t_login" href="../login/login.php">로그인</a>
            <?php }else{ ?>
                <a class="t_login" href="edit.php">마이페이지</a>
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
                                <?php if(!$sid){ ?>
                                <li class="top1"><a href="../login/login.php">로그인</a></li>
                                <li class="top6"><a href="join_01.php">회원가입</a></li>
                                <?php }else{ ?>
                                <li class="top5"><a href="javascript::" onclick="logout()">로그아웃</a></li>
                                <li class="top2"><a href="edit.php">마이페이지</a></li>
                                <?php }; ?>
                                <li class="top3"><a href="https://www.dongsuh.co.kr/05_client/faq.asp" target="_blank">고객센터</a></li>
                                <li class="top4"><a href="https://www.facebook.com/maxim.kanu?fref=ts" target="_blank">페이스북</a></li>
                            </ul>
                        </div>
                    </section>
    </header>

    <main id="content" class="content">
        <div class="top_image"><img src="../images/join_top_image.jpg" alt="회원가입 이미지"></div>
        
        <div class="main_cont">
            <ul class="tap_menu">
                <li class="tap1"><a href="edit.php">회원 정보 수정</a></li>
                <li class="tap2"><a href="delete.php">회원 탈퇴</a></li>
            </ul>
            <h1>회원정보수정</h1>
            <form action="edit_ok.php" name="edit" method="post" class="edit">
                <fieldset>
                    <legend>회원정보</legend>
                    <div class="edit_wrap">
                        <div class="edit_inner">
                            <div class="user_name">
                                <label for="uname">이름</label>
                                <?php echo $array["uname"] ?>
                                <input type="hidden" id="uname" name="uname" value="<?php echo $array["uname"] ?>">
                            </div>

                            <div class="user_id">
                                <label for="uid">이메일 주소 (아이디)</label>
                                <?php echo $array["uid"] ?>
                                <input type="hidden" id="uid" name="uid" value="<?php echo $array["uid"] ?>">
                            </div>

                            <div class="user_pwd">
                                <label for="pwd">비밀번호</label>
                                <input type="password" id="pwd" name="pwd">
                                <p>비밀번호는 영대소문자/숫자/특수문자 조합,8~16자 조합입니다.</p>
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

                    <div class="edit_btn">
                        <button type="button" class="ok_btn" onclick="edit_ok(this.form)">확인</button>
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