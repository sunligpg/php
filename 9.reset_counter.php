<?php
    session_start();//session啟動
    unset($_SESSION["counter"]);//刪除
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
