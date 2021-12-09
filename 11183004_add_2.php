<?php

    $masp= $_POST['MaSanPham'];
    $mdsp=$_POST['MaDongSanPham'];
    $tensp= $_POST['TenSanPham'];
    $mausac= $_POST['MauSac'];
    $giaban= $_POST['GiaBan'];
    $soluong= $_POST['SoLuong'];

    //ket noi thay doi voi co so du lieu
    require("index.php");
    $queryTT = "SELECT * FROM 'sanpham' WHERE MaSanPham='".$masp."'";
    $resultTT = mysqli_query($conn,"SELECT * FROM sanpham WHERE MaSanPham='".$masp."'");

    $row = mysqli_fetch_array($resultTT);
    if(empty($row)){
        $query ="INSERT INTO sanpham(MaSanPham, MaDongSanPham, TenSanPham, MauSac, GiaBan, SoLuong) 
        VALUES ('".$masp."','".$mdsp."','".$tensp."','".$mausac."','".$giaban."','".$soluong."')";
    }
        $result = mysqli_query($conn,$query);
        if(empty($query)){
            echo "Thêm thất bại";
        }else{
            echo "ĐÃ THÊM THÀNH CÔNG!";
        }

?>

