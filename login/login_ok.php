<meta charset="UTF-8">
<?php
    session_start();

    $login_id = $_POST["login_id"];
    $login_pwd = $_POST["login_pwd"];

    include "../inc/dbcon.php";

    $sql = "select * from members where uid='$login_id';";


    $result = mysqli_query($dbcon,$sql);
    $array = mysqli_fetch_array($result);

    if(!$array["uid"]){
        echo "<script type='text/javascript'>
        alert('아이디가 일치하지 않습니다.');
        history.back();
    </script>";
    };
    if($array["uid"]){
        if($array["pwd"] != $login_pwd){
            echo "<script type='text/javascript'>
            alert('비밀번호가 일치하지 않습니다.');
            history.back();
            </script>";
        };
    };

    $_SESSION["uid"] = $array["uid"];
    $_SESSION["uname"] = $array["uname"];

    mysqli_close($dbcon);

    echo "<script type='text/javascript'>
            location.href='../index.php'
            </script>";
?>
