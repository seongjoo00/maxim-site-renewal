<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이메일 주소 중복 체크</title>
    <link rel="stylesheet" href="../css/default.css">
    <style type="text/css">
     /* id_check */
     .id_check{
            width:319px;height:232px;
            background:url("../images/m_id_check_bg.png") no-repeat;
            position: relative;z-index:70;padding:25px 15px 0 12px;box-sizing: border-box;margin:auto
        }
        .id_check h2{
            font-size: 20px;font-weight: bold;color:#fff;
            margin-bottom: 38px;
        }
        .id_check_form fieldset legend{position: absolute;top:-9999px;left:-9999px}
        .id_check_form fieldset div{width:289px;height:85px;
            background:#fffbf4;border:1px solid #a3938a;padding: 10px 15px;
            box-sizing: border-box;margin:0 auto 15px}
        .id_check_form fieldset div label{letter-spacing: -1px;margin-bottom: 10px;display: block;text-align: center;}
        .id_check_form fieldset div input{width:210px;height:24px;padding: 0 5px;box-sizing: border-box;outline:none;margin:auto;display:block}
        .id_check_form fieldset .check_btn{
            width:100px;height:30px;
            background:#53382d;color:#fff;letter-spacing: 3px;border:0px;
            margin: auto;display: block;cursor:pointer;outline:none
        }
        .nid{color:#ff4a00;margin-left:55px;font-size:12px}
</style>
<script>
    function id_search(){
        var user_id = document.getElementById("user_id").value.replace(/\s/g, "");

        if(!user_id){
            nid.innerHTML="* 아이디를 입력해 주세요.";
            user_id.focus();
            return false;
        };

        document.id_check_form.submit();
    };
</script>
</head>
<body>
            <section class="id_check">
                <h2>이메일 주소 중복 체크</h2>

                <form action="id_search.php" name="id_check_form" method="post" class="id_check_form">
                    <fieldset>
                        <legend>이메일주소 검색</legend>
                        <div>
                            <label for="user_id">이메일주소 입력</label>
                            <input type="text" id="user_id" name="user_id">
                            <span id="nid" class="nid"></span>
                        </div>

                        <button type="button" class="check_btn" onclick="id_search()">중복확인</button>

                    </fieldset>
                </form>
            </section>
</body>
</html>