<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/join_01.css">
    <link rel="stylesheet" href="../css/t_join_01.css" media="screen and (max-width:1024px) and (min-width:768px)">
    <link rel="stylesheet" href="../css/m_join_01.css" media="screen and (max-width:767px)">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/basic.js"></script>
    <script>
        function agree_check(){
             var terms_y = document.getElementById("terms_y");
             var terms_n = document.getElementById("terms_n");
             var personal_y = document.getElementById("personal_y");
             var personal_n = document.getElementById("personal_n");
             var trust_y = document.getElementById("trust_y");
             var trust_n = document.getElementById("trust_n");

             /* terms */
             if(terms_n.checked){
                alert("이용약관에 동의해야 회원가입이 가능합니다.");
                terms_y.focus();
                return false;
             };
             if(!terms_y.checked){
                alert("이용약관에 동의 해주세요.");
                terms_y.focus();
                return false;
             };
             /* personal */
             if(personal_n.checked){
                alert("개인정보 수집에 동의해야 회원가입이 가능합니다.");
                personal_y.focus();
                return false;
             };
             if(!personal_y.checked){
                alert("개인정보 수집에 동의 해주세요.");
                personal_y.focus();
                return false;
             };
             /* trust */
             if(trust_n.checked){
                alert("수집한 개인정보의 위탁에 동의해야 회원가입이 가능합니다.");
                trust_y.focus();
                return false;
             };
             if(!trust_y.checked){
                alert("수집한 개인정보의 위탁에 동의 해주세요.");
                trust_y.focus();
                return false;
             };

             location.href="./join_02.php";
        };
        function agree_cancel(){
            location.href="../index.php"
        }
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
            <form action="join_02.php" name="join1" method="post" class="join1">
                <fieldset>
                    <legend>이용약관 동의</legend>
                <section class="join_terms">
                    <h2>이용약관</h2>
                    <div class="terms_wrap">
                        <section class="terms_agree">
                            <p class="txt_bld">제1조(목적 등)</p>
                            ① 맥심 사이트 (www.mymaxim.co.kr) 이용자 약관(이하 "본 약관"이라 합니다)은 이용자가 ㈜동서식품(이하 "맥심브랜드"이라 합니다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 합니다)를 이용함에 있어 이용자와 동서의 권리의무 및 책임사항을 규정함을 목적으로 합니다.</br>
                            ② 이용자가 되고자 하는 자가 맥심브랜드가 정한 소정의 절차를 거쳐서 "등록하기" 단추를 누르면 본 약관에 동의하는 것으로 간주합니다. 본 약관에 정하는 이외의 이용자와 맥심브랜드의 권리, 의무 및 책임사항에 관해서는 전기통신사업법 기타 대한민국의 관련 법령과 상관습에 의합니다.</br></br>

                            <p class="txt_bld">제2조(이용자의 정의)</p>
                            "이용자"란 맥심브랜드 사이트에 접속하여 본 약관에 따라 맥심브랜드 회원으로 가입하여 맥심브랜드가 제공하는 서비스를 받는 자를 말합니다.</br></br>

                            <p class="txt_bld">제3조 (회원 가입)</p>
                            ① 이용자가 되고자 하는 자는 맥심브랜드가 정한 가입 양식에 따라 회원정보를 기입하고 "등록하기" 단추를 누르는 방법으로 회원 가입을 신청합니다.</br>
                            ② 맥심브랜드는 제1항과 같이 회원으로 가입할 것을 신청한 자가 다음 각 호에 해당하지 않는 한 신청한 자를 회원으로 등록합니다.</br>
                            1. 가입신청자가 본 약관 제6조 제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우. 다만 제6조 제3항에 의한 회원자격 상실 후 3년이 경과한 자로서 맥심브랜드의 회원재가입 승낙을 얻은 경우에는 예외로 합니다.</br>
                            2. 등록 내용에 허위, 기재누락, 오기가 있는 경우</br>
                            3. 기타 회원으로 등록하는 것이 맥심브랜드의 기술상 현저히 지장이 있다고 판단되는 경우</br>
                            ③ 회원가입계약의 성립시기는 맥심브랜드의 승낙이 가입신청자에게 도달한 시점으로 합니다.</br>
                            ④ 회원은 제1항의 회원정보 기재 내용에 변경이 발생한 경우, 즉시 변경사항을 정정하여 기재하여야 합니다.</br></br>
                            <p class="txt_bld">제4조(서비스의 제공 및 변경)</p>
                            ① 맥심브랜드는 이용자에게 아래와 같은 서비스를 제공합니다.</br>
                            1. 인터넷커뮤니티 카페 이용서비스</br>
                            2. 칼럼 서비스</br>
                            3. 회원을 위한 섹션 및 컨텐트 서비스, 맞춤 서비스</br>
                            4. 기타 맥심브랜드가 자체 개발하거나 다른 회사와의 협력계약 등을 통해 회원들에게 제공할 일체의 서비스</br>
                            ② 맥심브랜드는 그 변경될 서비스의 내용 및 제공일자를 제7조 제2항에서 정한 방법으로 이용자에게 통지하고, 제1항에 정한 서비스를 변경하여 제공할 수 있습니다.</br></br>
                            <p class="txt_bld">제5조(서비스의 중단)</p>
                            ① 맥심브랜드는 컴퓨터 등 정보통신설비의 보수점검교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있고, 새로운 서비스로의 교체 등 기타 맥심브랜드가 적절하다고 판단하는 사유에 기하여 현재 제공되는 서비스를 완전히 중단할 수 있습니다.</br>
                            ② 제1항에 의한 서비스 중단의 경우에는 맥심브랜드는 제7조 제2항에서 정한 방법으로 이용자에게 통지합니다. 다만, 맥심브랜드가 통제할 수 없는 사유로 인한 서비스의 중단(시스템 관리자의 고의, 과실이 없는 디스크 장애, 시스템 다운 등)으로 인하여 사전 통지가 불가능한 경우에는 그러하지 아니합니다.</br></br>
                            <p class="txt_bld">제6조(서비스의 제공 및 변경)</p>
                            ① 이용자는 맥심브랜드에 언제든지 자신의 회원 등록을 말소해 줄 것(이용자 탈퇴)을 요청할 수 있으며 맥심브랜드는 위 요청을 받은 즉시 해당 이용자의 회원 등록 말소를 위한 절차를 밟습니다.</br>
                            ② 이용자가 다음 각 호의 사유에 해당하는 경우, 맥심브랜드는 이용자의 회원자격을 적절한 방법으로 제한 및 정지, 상실시킬 수 있습니다.</br>
                            1. 가입 신청 시에 허위 내용을 등록한 경우</br>
                            2. 다른 사람의 맥심브랜드 이용을 방해하거나 그 정보를 도용하는 등 전자거래질서를 위협하는 경우</br>
                            3. 맥심브랜드를 이용하여 법령과 본 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우</br>
                            ③ 맥심 사이트 이용자의 회원자격을 상실시키기로 결정한 경우에는 회원등록을 말소합니다. 이 경우 이용자인
                            회원에게 회원등록 말소 전에 이를 통지하고, 소명할 기회를 부여합니다.</br></br>
                            <p class="txt_bld">제7조(이용자에 대한 통지)</p>
                            ① 맥심 사이트가 특정 이용자에 대한 통지를 하는 경우 맥심브랜드가 부여한 메일주소로 할 수 있습니다.</br>
                            ② 맥심 사이트가 불특정다수 이용자에 대한 통지를 하는 경우 1주일이상 맥심브랜드 게시판에 게시함으로써 개별 통지에 갈음할 수 있습니다.</br></br>
                            <p class="txt_bld">제8조(이용자의 개인정보보호)</p>
                            맥심 브랜드는 관련법령이 정하는 바에 따라서 이용자 등록정보를 포함한 이용자의 개인정보를 보호하기 위하여 노력합니다. 이용자의 개인정보보호에 관해서는 관련법령 및 맥심 사이트가 정하는 "개인정보보호정책"에 정한 바에 의합니다.</br></br>
                            <p class="txt_bld">제9조(맥심의 의무)</p>
                            ① 맥심은 법령과 본 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 본 약관이 정하는 바에 따라 지속적이고, 안정적으로 서비스를 제공하기 위해서 노력합니다.</br>
                            ② 맥심은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 구축합니다.</br>
                            ③ 맥심은 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.</br>
                            ④ 맥심은 이용자가 서비스를 이용함에 있어 맥심브랜드의 고의 또는 중대한 과실로 인하여 입은 손해를 배상할 책임을 부담합니다.</br></br>
                            <p class="txt_bld">제10조(이용자의 ID 및 비밀번호에 대한 의무)</p>
                            ① 맥심 관계법령, "개인정보보호정책"에 의해서 그 책임을 지는 경우를 제외하고, 자신의 ID와 비밀번호에 관한 관리책임은 각 이용자에게 있습니다.</br>
                            ② 이용자는 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다.</br>
                            ③ 이용자는 자신의 ID 및 비밀번호를 도난당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 맥심브랜드에 통보하고 맥심브랜드의 안내가 있는 경우에는 그에 따라야 합니다.</br></br>
                            <p class="txt_bld">제11조(이용자의 의무)</p>
                            ① 이용자는 다음 각 호의 행위를 하여서는 안됩니다.</br>
                            1. 회원가입신청 또는 변경시 허위내용을 등록하는 행위
                            2. 맥심에 게시된 정보를 변경하는 행위</br>
                            3. 맥심 기타 제3자의 인격권 또는 지적재산권을 침해하거나 업무를 방해하는 행위</br>
                            4. 다른 회원의 ID를 도용하는 행위</br>
                            5. 정크메일(junk mail), 스팸메일(spam mail), 행운의 편지(chain letters), 피라미드 조직에 가입할 것을 권유하는 메일, 외설 또는 폭력적인 메시지 화상음성 등이 담긴 메일을 보내거나 기타 공서양속에 반하는 정보를 공개 또는게시하는 행위.</br>
                            6. 관련 법령에 의하여 그 전송 또는 게시가 금지되는 정보(컴퓨터 프로그램 등)의 전송 또는 게시하는 행위
                            7. 맥심브랜드의 직원이나 맥심브랜드 서비스의 관리자를 가장하거나 사칭하여 또는 타인의 명의를 모용하여 글을 게시하거나 메일을 발송하는 행위</br>
                            8. 컴퓨터 소프트웨어, 하드웨어, 전기통신 장비의 정상적인 가동을 방해, 파괴할 목적으로 고안된 소프트웨어 바이러스, 기타 다른 컴퓨터 코드, 파일, 프로그램을 포함하고 있는 자료를 게시하거나 전자우편으로 발송하는 행위</br>
                            9. 스토킹(stalking) 등 다른 이용자를 괴롭히는 행위</br>
                            10. 다른 이용자에 대한 개인정보를 그 동의 없이 수집,저장,공개하는 행위</br>
                            11. 불특정 다수의 자를 대상으로 하여 광고 또는 선전을 게시하거나 스팸메일을 전송하는 등의 방법으로 맥심브랜드의 서비스를 이용하여 영리목적의 활동을 하는 행위</br>
                            12. 맥심브랜드가 제공하는 서비스에 정한 약관 기타 서비스 이용에 관한 규정을 위반하는 행위</br>
                            ② 제1항에 해당하는 행위를 한 이용자가 있을 경우 맥심브랜드는 본 약관 제6조 제2, 3항에서 정한 바에 따라 이용자의 회원자격을 적절한 방법으로 제한 및 정지, 상실시킬 수 있습니다.</br>
                            ③ 이용자는 그 귀책사유로 인하여 맥심브랜드나 다른 이용자가 입은 손해를 배상할 책임이 있습니다.</br></br>
                            <p class="txt_bld">제 12조 (공개게시물의 삭제)</p>
                            이용자의 공개게시물의 내용이 다음 각 호에 해당하는 경우 맥심브랜드는 이용자에게 사전 통지 없이 해당 공개게시물을 삭제할 수 있고, 해당 이용자의 회원 자격을 제한, 정지 또는 상실시킬 수 있습니다.</br>
                            1. 다른 이용자 또는 제3자를 비방하거나 중상 모략으로 명예를 손상시키는 내용</br>
                            2. 공서양속에 위반되는 내용의 정보, 문장, 도형 등을 유포하는 내용</br>
                            3. 범죄행위와 관련이 있다고 판단되는 내용</br>
                            4. 다른 이용자 또는 제3자의 저작권 등 기타 권리를 침해하는 내용</br>
                            5. 기타 관계 법령에 위배된다고 판단되는 내용</br></br>
                            <p class="txt_bld">제13조(저작권의 귀속 및 이용제한)</p>
                            ① 맥심브랜드가 작성한 저작물에 대한 저작권 기타 지적재산권은 맥심브랜드에 귀속합니다.</br>
                            ② 이용자는 맥심브랜드를 이용함으로써 얻은 정보를 맥심브랜드의 사전승낙 없이 복제, 전송, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.</br></br>
                            <p class="txt_bld">제14조 (약관의 개정)</p>
                            ① 맥심브랜드는 약관의규제등에관한법률, 전자거래기본법, 전자서명법, 정보통신망이용촉진등에관한법률 등 관련법을 위배하지 않는 범위에서 본 약관을 개정할 수 있습니다.</br>
                            ② 맥심브랜드가 본 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다.</br>
                            ③ 맥심브랜드가 본 약관을 개정할 경우에는 그 개정약관은 개정된 내용이 관계 법령에 위배되지 않는 한 개정 이전에 회원으로 가입한 이용자에게도 적용됩니다.</br>
                            ④ 변경된 약관에 이의가 있는 이용자는 제6조 제1항에 따라 탈퇴할 수 있습니다.</br></br>
                            <p class="txt_bld">제15조(서비스의 제공 및 변경)</p>
                            맥심브랜드와 이용자간에 발생한 서비스 이용에 관한 분쟁으로 인한 소는 민사소송법상의 관할을 가지는 대한민국의 법원에 제기합니다.</br></br>

                            부 칙</br>
                            본 약관은 2011. 2. 1. 부터 적용합니다.
                        </section>
                    </div>
                    <p class="check_txt">위의 내용을 읽어보시고 동의여부를 결정하시기 바랍니다.</p>
                    <div class="terms_check">
                        <input type="radio" id="terms_y" name="terms" value="Y">
                        <label for="terms_y" class="margin"><span></span>동의</label>
                        <input type="radio" id="terms_n" name="terms" value="N">
                        <label for="terms_n"><span></span>동의안함</label>
                    </div>
                </section>

                <section class="join_personal">
                    <h2>개인정보 수집 및 이용에대한 동의 사항</h2>
                    <div class="personal_wrap">
                        <section class="personal_agree">
                            <p class="txt_bld"><개인정보 수집 및 이용에 대한 동의사항 ></p>
                            '(주)맥심브랜드'은 (이하 '회사'는)고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다.</br>
                            회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 
                            개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.</br>
                            회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.</br>
                            ο 본 방침은 : 2008 년 10 월 29 일 부터 시행됩니다.</br></br>

                            수집하는 개인정보 항목</br>
                            회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다. </br>
                            ο 수집항목 : 이메일 주소</br>
                            ο 개인정보 수집방법 : 홈페이지(회원가입)</br></br>

                            개인정보의 수집 및 이용목적</br>
                            회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.</br>
                            ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산콘텐츠 제공</br>
                            ο 회원 관리회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량회원의 부정 이용 방지와 비인가 사용 방지 , 가입 의사 확인 , 연령확인 , 불만처리 등 민원처리 , 고지사항 전달</br>
                            ο 마케팅 및 광고에 활용신규 서비스(제품) 개발 및 특화 , 이벤트 등 광고성 정보 전달 , 인구통계학적 특성에 따른 서비스 제공 및 광고 게재 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계</br></br>

                            개인정보의 보유 및 이용기간</br>
                            회사는 개인정보 수집 및 이용목적이 달성된 후에는 예외 없이 해당 정보를 지체 없이 파기합니다.
                        </section>
                    </div>
                    <p class="check_txt">위의 내용을 읽어보시고 동의여부를 결정하시기 바랍니다.</p>
                    <div class="personal_check">
                        
                        <input type="radio" id="personal_y" name="personal" value="Y">
                        <label for="personal_y" class="margin"><span></span>동의</label>
                        <input type="radio" id="personal_n" name="personal" value="N">
                        <label for="personal_n"><span></span>동의안함</label>
                    </div>
                </section>

                <section class="join_trust">
                    <h2>수집한 개인정보의 위탁</h2>
                    <div class="trust_wrap">
                        <section class="personal_trust">
                            <p class="txt_bld"><수집한 개인정보의 위탁></p>
                            회사는 서비스 이행을 위해 아래와 같이 외부 전문업체에 운영을 위탁하고 있습니다.</br></br>

                            - 위탁 대상자 : 코너 크리에이티브(주)</br>
                            - 위탁업무 내용 : 웹사이트 및 시스템 관리, 웹진 제작 및 운영, 이벤트 운영, 물품 배송 또는 청구지 등 발송, 멤버십카드 발급, 회원모집 및 관리, 포인트 적립/사용/조회 정보제공 업무, SMS발송, 마케팅수신동의 변경 등 동의 변경 등
                        </section>
                    </div>
                    <p class="check_txt">위의 내용을 읽어보시고 동의여부를 결정하시기 바랍니다.</p>
                    <div class="trust_check">
                        <input type="radio" id="trust_y" name="trust" value="Y">
                        <label for="trust_y" class="margin"><span></span>동의</label>  
                        <input type="radio" id="trust_n" name="trust" value="N">
                        <label for="trust_n"><span></span>동의안함</label>
                    </div>
                </section>

                <div class="agree_btn">
                    <button type="button" class="next_btn" onclick="agree_check()">다음</button>
                    <button type="button" class="cancel_btn" onclick="agree_cancel()">취소</button>
                </div>
            </fieldset>
            </form>

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