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
            color:#BFBDBE;}
        table{
            width: 100%;
            border-collapse: collapse; 
        }
        .tieude{
            background-color:#EEEFFE;
            font-weight: 600;
        }
        tr{
            background-color:#FBFBFF;
        }
        table tr td{
            border: 1px solid white;}
         tr{
            height:40px;
        }
        table tr{
            text-align: center;}
    </style>
<body>
    <?php  
        $masp=$_GET['MaSanPham'];
        $mdsp=$_GET['MaDongSanPham'];
    ?>
    <div class="title">
        <h1>Sửa thông tin</h1>

    </div>
    <div class="main">
        <form action='11183004_edit_2.php' method="POST">
            <table>
            <tr class='tieude'>
                <td>Mã sản phẩm</td>
                <td><input type="text" name ="MaSanPham"value=<?php echo "'" .$masp."'"?> readonly></td>
          </tr><tr class='tieude'>
                 <td >Mã dòng sản phẩm</td>
                <td><input type="text" value=<?php echo "'".$mdsp."'"?> readonly> </td>
          </tr>
                  <td>Tên sản phẩm</td>
                <td> <input type="text" name="TenSanPham" placeholder="Nhập tên sản phẩm...">
            </td>
          </tr>
          </tr>
                  <td>Màu sắc</td>
                <td> <input type="text" name="MauSac" placeholder="Nhập màu sản phẩm...">
            </td>
          </tr>
          </tr>
                  <td>Giá bán</td>
                <td> <input type="text" name="GiaBan" placeholder="Nhập giá bán sản phẩm...">
            </td>
          </tr>
          </tr>
                  <td>Số lượng</td>
                <td> <input type="text" name="SoLuong" placeholder="Số lượng sản phẩm...">
            </td>
                <tr> <td colspan="2"><input type="submit" value="Xác Nhận"></td>
          </tr>
          </tr>
                
            </table>
        </form>
    </div>

</body>
</html>