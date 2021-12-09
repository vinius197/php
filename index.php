<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Admin</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/a/ab/Apple-logo.png"></i>
    <style>
        *{
    margin: 0px;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
        .title{
            width: 1000px;
            height:80px;
            margin: 0px auto;
            background: #333333;
           
        }
        .main{
        width: 1000px;
        height: 500px;
        margin: 0px auto;
        background: #FBFBFD;
       
        }
        h1{
            text-align: center;
            position: relative;
            top: 20px;
            color:#BFBDBE;
        }
        table tr td{
            border: 1px solid grey;
        }
        table{
            width: 100%;
            border-collapse: collapse; 
        }
        td{
            height:40px;
        }
        
        table tr{
            
            text-align: center;
        }
        .fix{
            padding: 5px 5px;
            text-decoration: none;
            color: black;
        }
       a:hover{
            color: blue;
            text-decoration: underline;
        }
        a:active{
            background-color:grey;

        }
        .tieude{
            background-color:#EEEFFE;
            font-weight: 600;
        }
        tr{
            background-color:#FBFBFF;
        }
    </style>
</head>
<body>
    <div class="title">
        <h1>BẢNG SẢN PHẨM APPLE</h1>
    </div>
    <div class="main">
        <table>
            <tr class='tieude'>
    
                <td>Mã sản phẩm</td>
                <td>Mã dòng sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Màu sắc</td>
                <td>Giá bán</td>
                <td>Số lượng</td>
                <td colspan="2">Tính năng</td>
             
            </tr>
           <?php
                //lay du lieu tu bang trong sql de len trang html
                require("11183004_connectdb.php");
                $query= "SELECT * FROM `sanpham`";
                $result= mysqli_query($conn,$query);
                while($row= mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>".$row['MaSanPham']."</td>";
                        echo "<td>".$row['MaDongSanPham']."</td>";
                        echo "<td>".$row['TenSanPham']."</td>";
                        echo "<td>".$row['MauSac']."</td>";
                        echo "<td>".$row['GiaBan']."</td>";
                        echo "<td>".$row['SoLuong']."</td>";
                        echo "<td><a class='fix' href='11183004_edit.php?MaSanPham=".$row['MaSanPham']."&MaDongSanPham=".$row['MaDongSanPham']."'>Sửa</a></td>";
                        echo "<td><a class='fix' href='11183004_delete.php?MaSanPham=".$row['MaSanPham']."'>Xóa</a></td>";
                    echo "<tr>";
                }
                
           ?>
           <tr>
               <td><a href='11183004_add.php' class='fix'>Thêm sản phẩm mới ></a></td>
               <td colspan="7"></td>
        </table>
    </div>
</body>
</html>

