<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
       *{
    margin: 0px;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
   *p{
       background: grey;
       color: red;
   }
</style>
<body>


<?php
    require("11183004_connectdb.php");
    $masp = $_GET['MaSanPham'];
    echo "<br>Mã sản phẩm đã xóa: ".$masp."<br>";
    $query= "DELETE FROM `sanpham` WHERE MaSanPham ='".$masp."'";
   echo "Nội dung xóa: ".$query;
    $result= mysqli_query($conn,$query);
    
    if(empty($result)){
        echo "<br>Xóa thất bại";
    }else {
        echo "<br>ĐÃ XÓA THÀNH CÔNG!";
    }
?> 


</body>
</html>

