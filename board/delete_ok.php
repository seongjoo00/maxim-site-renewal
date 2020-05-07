<meta charset="UTF-8">
<?php
    session_start();
    $bno = $_GET["no"]; 

    $sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

    if($sid != "admin" || !$sid){
        echo "<script type='text/javascript'>
        alert('관리자만 사용할 수 있습니다.');
        location.href='../index.php';
        </script>";
    };
    include "../inc/dbcon.php";

    $sql = "delete from bbs where no=$bno;";

    
    mysqli_query($dbcon,$sql);

    mysqli_close($dbcon);

    echo "<script type='text/javascript'>
    alert('삭제 되었습니다.');
    location.href='list.php';
    </script>";   
?>