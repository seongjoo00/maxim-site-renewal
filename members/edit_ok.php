<meta charset="UTF-8">
<?php
    session_start();
    $sid = $_SESSION["uid"]? $_SESSION["uid"]:"";

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    include "../inc/dbcon.php";

    $sql = "update members set pwd = '$pwd' where uid = '$uid';";

    mysqli_query($dbcon,$sql);

    mysqli_close($dbcon);

    echo "<script>
    alert('정보수정이 완료되었습니다.');
    location.href='../index.php';
</script>"
?>
