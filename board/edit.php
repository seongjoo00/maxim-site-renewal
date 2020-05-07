<?php
    session_start();
    $bno = $_GET["no"];

    $sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

    if($sid != "admin" || !$sid){
        echo "<script type='text/javascript'>
        alert('관리자만 사용할 수 있습니다.');
        location.href='../login/login.php';
        </script>";
    };
    include "../inc/dbcon.php";
    
    $sql = "select * from bbs where no=$bno;";
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
    <link rel="stylesheet" href="../css/write.css">
    <link rel="stylesheet" href="../css/t_write.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="../css/m_write.css" media="screen and (max-width:767px)">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/basic.js"></script>
    <script type="text/javascript" src="../editor/js/service/HuskyEZCreator.js" charset="utf-8"></script>
    <script>
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
        <div class="top_image"><img src="../images/news_notice.jpg" alt="product이미지"></div>

        <div class="main_cont">
            <ul class="tap_menu">
                <li class="tap1 current"><a class="current" href="javascript::">NEWS & NOTICE</a></li>
                <li class="tap2"><a href="javascript::">TV CF</a></li>
                <li class="tap3"><a href="javascript::">MAXIM CHANNEL</a></li>
            </ul>

            <div class="news_wrap">
                <div id="tap1" class="tabcontent current">
                    <h2>NEWS & NOTICE</h2>
                    <p class="txt">맥심의 새로운 뉴스와 다양한 소식들을 만나보세요.</p>
                    <div class="news_inner">
                        <form action="edit_ok.php" name="write" method="post">
                            <fieldset>
                                <legend>게시판 글쓰기</legend>
                                <div class=write_input1>
                                    <label for="type">유형</label>
                                    <input type="text" id="type" name="type" value="[소식]" readonly="readonly">
                                    <input type="hidden" id="hidden_no" name="hidden_no" value="<?php echo $bno ?>">
                                </div>

                                <div class=write_input2>
                                    <label for="subject">제목</label>
                                    <input type="text" id="subject" name="subject" value="<?php echo $array["subject"] ?>">
                                </div>

                                <div class=write_input3>
                                    <textarea style="resize: none;" name="write_content" id="ir1"><?php echo $array["content"] ?></textarea>
                                </div>
                                <script type="text/javascript">
                                    var oEditors = [];

                                    var sLang = "ko_KR";

                                    nhn.husky.EZCreator.createInIFrame({
                                        oAppRef: oEditors,
                                        elPlaceHolder: "ir1",
                                        sSkinURI: "../editor/SmartEditor2Skin.html",
                                        htParams : {
                                        bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
                                        bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
                                        bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
                                        //bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
                                        //aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
                                        fOnBeforeUnload : function(){
                                            //alert("완료!");
                                        },
                                        I18N_LOCALE : sLang
                                    }, //boolean
                                    fOnAppLoad : function(){
                                        //예제 코드
                                        //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
                                    },
                                        fCreator: "createSEditor2"
                                    });
                                    function pasteHTML() {
                                    var sHTML = "<span style='color:#FF0000;'>이미지도 같은 방식으로 삽입합니다.<\/span>";
                                    oEditors.getById["ir1"].exec("PASTE_HTML", [sHTML]);
                                    };
                                    function showHTML() {
                                        var sHTML = oEditors.getById["ir1"].getIR();
                                        alert(sHTML);
                                    };
                                    function submitContents(elClickedObj) {
                                        oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
                                        try {
                                            elClickedObj.form.submit();
                                        } catch(e) {}
                                    };

                                    function setDefaultFont() {
                                        var sDefaultFont = '궁서';
                                        var nFontSize = 24;
                                        oEditors.getById["ir1"].setDefaultFont(sDefaultFont, nFontSize);
                                    };
                                    
                                    function delete_btn(){
                                        location.href="delete_ok.php?no=<?php echo $array["no"] ?>"
                                    };
                                    </script>

                                <div class="write_btn">
                                    <button type="submit" class="ok_btn" onclick="submitContents(this.form)">전송</button>
                                    <button type="button" class="cancel_btn" onclick="delete_btn()">삭제</button>
                                </div>
                            </fieldset>
                        </form>
                    </div><!-- news_inner -->
                </div><!-- tap1 -->

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
            </div><!-- news_wrap -->
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