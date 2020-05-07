<meta charset="UTF-8">
<?php
    session_start();
    $bno = $_POST["hidden_no"]; 

    $sid = isset($_SESSION["uid"])? $_SESSION["uid"]:"";

    $type = $_POST["type"];
    $subject = $_POST["subject"];
    $content = $_POST["write_content"];

    include "../inc/dbcon.php";

    $sql = "update bbs set subject='$subject',content='$content' where no = $bno;";

    mysqli_query($dbcon,$sql);

    mysqli_close($dbcon);

    echo "<script type='text/javascript'>
    alert('수정이 완료되었습니다.');
    location.href='list.php';
    </script>";   
?>