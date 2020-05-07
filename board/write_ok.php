<meta charset="UTF-8">
<?php
    $type = $_POST["type"];
    $subject = $_POST["subject"];
    $content = $_POST["write_content"];
    $reg_date = date("Y-m-d");
    $ip = getenv("REMOTE_ADDR");

    include "../inc/dbcon.php";

    $sql = "insert into bbs(type,subject,content,reg_date,ip)values('$type','$subject','$content','$reg_date','$ip');";

    mysqli_query($dbcon,$sql);

    mysqli_close($dbcon);

    echo "<script type='text/javascript'>
    alert('작성이 완료되었습니다.');
    location.href='list.php';
    </script>";   
?>