<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        function login_ok(form){
        var login_id = document.getElementById("login_id").value.replace(/\s/g, "");
        var login_pwd = document.getElementById("login_pwd").value.replace(/\s/g, "");

        if(!login_id){
            alert("아이디를 입력해 주세요.");
            login_id.focus();
            return false;
        };
        if(!login_pwd){
            alert("비밀번호를 입력해 주세요.");
            login_pwd.focus();
            return false;
        };

        form.submit();
    
};
    </script>
</head>
<body>
    <div class="skip_menu">
        <a href="../index.php">메인 바로가기</a> 
        <a href="../poduct/product.php">맥심제품 바로가기</a>
        <a href="../members/join_01.php">회원가입 바로가기</a>
    </div>

    <header id="header" class="header">
        <h1><a href="../index.php"><img src="../images/maxim_logo.png" alt="맥심"></a></h1>
    </header>

    <main id="content" class="content">
            <form action="login_ok.php" name="login" class="login_form" method="post">
                <fieldset>
                    <legend>로그인 입력</legend>
                        <h2>로그인</h2>
                        <p class="txt">Welcome,Maxim</p>
                            <label for="login_id" class="label">아이디</label>
                            <input type="text" id="login_id" name="login_id" class="login_input" placeholder="아이디는 이메일 형식입니다.">

                            <label for="login_pwd" class="label">비밀번호</label>
                            <input type="password" id="login_pwd" name="login_pwd"  class="login_input" placeholder="비밀번호를 입력해주세요.">
                        <div class="login_check">
                            <input type="checkbox" id="id_save" name="id_save" value="id_save">
                            <label for="id_save"><span></span>아이디 저장</label>
                        </div>
                        <button type="button" class="login_btn" onclick="login_ok(this.form)">로그인</button>
                        <div class="login_search">
                        <a href="#" class="search_id">아이디찾기</a><a href="#" class="search_pwd">비밀번호찾기</a><a href="../members/join_01.php" class="join_us">회원가입</a>
                        </div>
                </fieldset>
            </form>
    </main>

    <footer id="footer" class="footer">
            <h2>copyright</h2>
                <p class="copy_right">ⓒ2013 DONG SUH FOOD,RIGHT RESERVED</p>
    </footer>          
    
    
</body>
</html>