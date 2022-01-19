<!DOCTYPE html>
<html>
<head>
<title>XẾP LOẠI KẾT QUẢ SINH VIÊN</title>
<!-- Unicode Tiếng Việt -->
<meta charset="UTF-8"> 
<meta name="author" content="HuynhThaiHung.com" />
<!-- Tập tin định nghĩa css -->
<link href="style.css" rel="stylesheet" /> 
</head>
<body>
<div id="wrapper">
<h2>XẾP LOẠI KẾT QUẢ SINH VIÊN</h2>
    <!-- Form gửi kết quả xử lý -->
    <!-- action là trang đích, giá trịnh # là gửi về chính trang hiện tại.
    Phương thức là post-->
    <form action="#" method="post">
        <!-- Môn Toán -->
        <div class="row">
            <div class="lbltitle">
                <label>Điểm môn Toán</label>
            </div>
            <div class="lblinput">
                <!-- name="toan" là tên biến gửi về server,
                isset($_POST['toan']) kiểm tra biến được định nghĩa hay chưa-->
                <input type="number" name="toan" value="<?php echo isset($_POST['toan']) ? $_POST['toan'] : "" ; ?>" />
            </div>
        </div>
        <!-- Môn Lý -->
        <div class="row">
            <div class="lbltitle">
                <label>Điểm môn Lý</label>
            </div>
            <div class="lblinput">
                <input type="number" name="ly" value="<?php echo isset($_POST['ly']) ? $_POST['ly'] : "" ; ?>" />
            </div>
        </div>
        <!-- Môn Hoá -->
        <div class="row">
            <div class="lbltitle">
                <label>Điểm môn Hoá</label>
            </div>
            <div class="lblinput">
                <input type="number" name="hoa" value="<?php echo isset($_POST['hoa']) ? $_POST['hoa'] : "" ; ?>" />
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Chọn khu vực</label>
            </div>
            <div class="lblinput">
                <select name="khuvuc">
                    <option value="0" selected >-- Chọn khu vực --</option>
                    <option value="1" <?php if(isset($_POST['khuvuc'])):echo $_POST["khuvuc"] ==1 ? "selected" : "" ?><?php endif;?> >khu vực 1</option>
                    <option value="2" <?php if(isset($_POST['khuvuc'])):echo $_POST["khuvuc"] ==2 ? "selected" : "" ?><?php endif;?> >khu vực 2</option>
                    <option value="3" <?php if(isset($_POST['khuvuc'])):echo $_POST["khuvuc"] ==3 ? "selected" : "" ?><?php endif;?> >khu vực 3</option>
                    <option value="4" <?php if(isset($_POST['khuvuc'])):echo $_POST["khuvuc"] ==4 ? "selected" : "" ?><?php endif;?> >khu vực 4</option>
                    <option value="5" <?php if(isset($_POST['khuvuc'])):echo $_POST["khuvuc"] ==5 ? "selected" : "" ?><?php endif;?> >khu vực 5</option>
                </select>
            </div>
        </div>
        <!-- Nút gửi form, nút lệnh gửi kết quả -->
        <div class="row">
            <div class="submit">
                <input type="submit" name="btnsubmit" value="Xếp loại" />
            </div>
        </div>
    </form>
    <!-- Hiển thị kết quả -->
    <div class="result">
        <h2>Kết quả xếp loại</h2>
        <div class="row">
            <div class="lbltitle">
                <label>Tổng điểm</label>
            </div>
            <div class="lbloutput">
                <?php echo isset($_POST['btnsubmit']) ? $_POST['toan'] + $_POST['ly'] + $_POST['hoa'] : "" ; ?>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="lbltitle">
                <label>Xếp loại</label>
            </div>
            <div class="lbloutput">
                <?php 
                    if(isset($_POST['btnsubmit'])){
                    $tongdiem = $_POST['toan'] + $_POST['ly'] + $_POST['hoa'];
                        if($tongdiem >= 24) echo "Giỏi";
                        elseif($tongdiem >= 21) echo "Khá";
                        elseif($tongdiem >= 15) echo "Trung bình";
                        else echo "Yếu";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Điểm ưu tiên</label>
            </div>
            <div class="lbloutput">
                <?php
                    if(isset($_POST['btnsubmit'])){
                        $diem_uutien = $_POST['khuvuc'];
                        switch($diem_uutien){
                            case 0:
                            case 4:
                            case 5:
                                echo "0";
                                break;
                            case 1:
                            case 2:
                                echo "5";
                                break;
                            case 3: 
                                echo "3";
                                break;
                            default:
                                echo "0";
                        
                        }
                    }
                ?>    
            </div>
        </div>
</div>
 
 
</body>
</html>