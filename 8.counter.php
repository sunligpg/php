<?php
 //判斷session變數之值，來決定使用者是否登入成功
    session_start();//session啟動
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
 <!-- <p><a href =reset_counter.php>瀏覽次數歸零</a>-->
 
