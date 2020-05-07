<?php
    $search_id = $_POST["user_id"];
    
    include "../inc/dbcon.php";

    $sql = "select uid from members where uid = '$search_id';";
    
    $result = mysqli_query($dbcon,$sql);

    $rows = mysqli_num_rows($result);
?>
<!-- 결과 출력 -->
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
            background:url('../images/m_id_check_bg.png') no-repeat;
            position: relative;z-index:70;padding:25px 15px 0 12px;box-sizing: border-box;margin:auto
        }
        .id_check h2{
            font-size: 20px;font-weight: bold;color:#fff;
            margin-bottom: 48px;
        }
        .id_check_form fieldset legend{position: absolute;top:-9999px;left:-9999px}
        .id_check_form fieldset .id_txt{font-size:22px;font-weight:bold;text-align:center;margin-bottom:15px}
        .id_check_form fieldset .txt{font-size:15px;font-weight:bold;text-align:center;margin-bottom:30px}
        .id_check_form fieldset .return_id{
            width:100px;height:30px;
            background:#53382d;color:#fff;letter-spacing: 3px;border:0px;
            margin: auto;display: block;cursor:pointer;outline:none
        }
        .y{color:#2b6bfc}
        .n{color:#ff6600}
    </style>
    <script>
        function back(){
            location.href="id_check.php";
        };
        <?php if(!$rows){ ?>
        function return_id(){
            opener.document.getElementById("uid").value = "<?php echo $search_id ?>";
            opener.document.getElementById("uid_hidden").value = "Y";
            window.close();
        };
        <?php } ?>
    </script>
</head>
<body>
            <section class="id_check">
                <h2>이메일 주소 중복 체크</h2>
                <form action="id_search.php" name="id_check_form" method="post" class="id_check_form">
                    <fieldset>
                        <legend>이메일주소 검색</legend>
                        <p class="id_txt">"<?php echo $search_id ?>"</p>

                        <?php if(!$rows){ ?>

                        <p class="txt"><span class="y">사용할 수 있는 아이디 입니다.</span></p>
                        <button type="button" class="return_id" onclick="return_id()">사용하기</button>

                        <?php }else{ ?>
                            <p class="txt"><span class="n">사용할 수 없는 아이디 입니다.</span></p>  
                            <button type="button" class="return_id" onclick="back()">돌아가기</button>
                        <?php } ?>
                        

                    </fieldset>
                </form>
            </section>
</body>
</html>
<?php
mysqli_close($dbcon);
?>