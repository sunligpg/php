<?php
    #步驟一:連結資料庫    $conn=mysqli_connect(ip,帳號,密碼,資料庫);
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    #步驟二:查詢資料     $result=mysqli_query(連結, 查詢命令);
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");

    #步驟三:從查詢結果一筆一筆把資料抓出來
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);

    #步驟四:抓取每個欄位資料
    # 方法一:  
    echo $row["id"]." ".$row["pwd"]."<br>";  //抓第一筆資料
    $row=mysqli_fetch_array($result);
     echo $row["id"] . " " . $row["pwd"]."<br>";   //抓第二筆資料
     $row=mysqli_fetch_array($result);
     echo $row["id"] . " " . $row["pwd"]."<br>";  //抓第三筆資料

     #方法二:
     echo $row["id"];
     echo " ";
     echo $row["pwd"]."<br>";
?>
