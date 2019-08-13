<div id="wrapper">
    <div id="page-wrapper">
    <form class="form-register" action="" method="POST" role="form">
        <?php
            if(isset($success) && in_array('add_succces',$success)){
                echo "<p class='alert alert-success'>Thêm tài khoản thành công, <a href='index.php?controller=thanh-vien&action=list'>Xem danh sách</a></p>";
            }
        ?>
    <h3>Thêm mới thành viên</h3>
        <div class="form-group">
            <label for="">Tài khoản</label>
            <input type="text" class="form-control" id="" name="taikhoan" placeholder="Tên tài khoản" value="<?php if(isset($_POST['taikhoan'])) echo $_POST['taikhoan'] ?>">
            <?php
            if(isset($error) && in_array('taikhoan',$error)){
                echo "<p class='error'>Tài khoản không được để trống</p>";
            }?>
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" name="matkhau" placeholder="Mật khẩu" value="<?php if(isset($_POST['taikhoan'])) echo $_POST['matkhau'] ?>">
            <?php
            if(isset($error) && in_array('matkhau',$error)){
                echo "<p class='error'>Mật khẩu không được để trống</p>";
            }?>
        </div>
        <div class="form-group">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu">
            <?php
            if(isset($error) && in_array('nhaplaimatkhau',$error)){
                echo "<p class='error'>Mật khẩu không trùng nhau</p>";
            }?>
        </div>
        <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" id="" name="hoten" placeholder="Họ tên" value="<?php if(isset($_POST['hoten'])) echo $_POST['taikhoan'] ?>">
            <?php
            if(isset($error) && in_array('hoten',$error)){
                echo "<p class='error'>Họ tên không được để trống</p>";
            }?>
        </div>
        <div class="form-group">
        <?php date_default_timezone_set('asia/Ho_Chi_Minh');
            $today_date = date('d/m/Y '); ?>
            <label for="">Ngày tạo</label>
            <input type="text" class="form-control" id="" name="ngaytao" placeholder="Ngày đăng kí" value="<?=$today_date?>">
        </div>
        <div class="form-group">
            <label for="">Cấp quyền (1 là admin - 0 là thành viên) </label>
            <select class="custom-select" id="inputGroupSelect02" name="role" id="">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="form-group">
            <label style="display:block;" for="">Trạng thái</label>
            <label for="" class="radio-inline"><input type="radio" style="margin-left:-50px;" checked="checked" name="status" value="1">Kích hoạt</label>
            <label for="" class="radio-inline"><input style="margin-left:-40px;" type="radio" name="status" value="0">Khóa</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Thêm tài khoản</button>
    </form>
