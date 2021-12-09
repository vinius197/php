<?php
    echo 'Mã sản phẩm: '.$_POST['MaSanPham'];
    echo '<br>Têm sản phẩm: '.$_POST['TenSanPham'];
    $masp= $_POST['MaSanPham'];
    $tensp= $_POST['TenSanPham'];
    $mausac= $_POST['MauSac'];
    $giaban= $_POST['GiaBan'];
    $soluong= $_POST['SoLuong'];

   //ket noi thay doi voi co so du lieu
   require("php-admin.php");
   $queryTT = "SELECT * FROM 'sanpham' WHERE MaSanPham='".$masp."'";
//   echo $queryTT;
   $resultTT = mysqli_query($conn,"SELECT * FROM sanpham WHERE MaSanPham='".$masp."'");

    $row = mysqli_fetch_array($resultTT);
    if(empty($tensp)){
        $tensp= $row['TenSanPham'];
    }
    if (empty($mausac)){
        $mausac= $row['MauSac'];
    }
    if (empty($giaban)){
        $mausac= $row['GiaBan'];
    }
    if (empty($soluong)){
        $mausac= $row['SoLuong'];
    }
  
   $query ="UPDATE `sanpham` SET `TenSanPham`='".$tensp."',`MauSac`='".$mausac."',`GiaBan`='".$giaban."',`SoLuong`='".$soluong."' WHERE MaSanPham ='".$masp."'";
   $result= mysqli_query($conn,$query);
    if(empty($result)){
        echo "<br>Không thành công<br>";
    }else{
        echo "<br>SỬA THÀNH CÔNG!<br>";
        
    }

?>