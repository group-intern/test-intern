<div id="wrapper">
    <div id="page-wrapper">
    <form class="form-register" action="" method="POST" role="form">
        <?php
            if(isset($success) && in_array('up_succces',$success)){
                echo "<p class='alert alert-success'>Update thành công, <a href='index.php?controller=thanh-vien&action=list'>Xem danh sách</a></p>";
            }
        ?>
    <h3>Cập nhật thành viên</h3>
        <div class="form-group">
            <label for="">Tài khoản</label>
            <input type="text" class="form-control" id="" name="taikhoan" placeholder="Tên tài khoản" value="<?=$dataInsert['username']?>">
            <?php
            if(isset($error) && in_array('taikhoan',$error)){
                echo "<p class='error'>Tài khoản không được để trống</p>";
            }?>
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="" name="matkhau" placeholder="Mật khẩu" value="<?=$dataInsert['password']?>" >
            <?php
            if(isset($error) && in_array('matkhau',$error)){
                echo "<p class='error'>Mật khẩu không được để trống</p>";
            }?>
        </div>
        <div class="form-group">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu" value="<?=$dataInsert['password']?>">
            <?php
            if(isset($error) && in_array('nhaplaimatkhau',$error)){
                echo "<p class='error'>Mật khẩu không trùng nhau</p>";
            }?>
        </div>
        <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" id="" name="hoten" placeholder="Họ tên" value="<?=$dataInsert['hoten']?>">
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
                <?php
                    if($dataInsert['role']==1){
                        ?>
                            <option value="1">1</option>
                            <option value="0">0</option>

                        <?php
                    }
                    else{
                        ?>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label style="display:block;" for="">Trạng thái</label>
            <?php
                if($dataInsert['status']==1){
                    ?>
                        <label for="" class="radio-inline"><input type="radio" style="margin-left:-50px;" checked="checked" name="status" value="1">Kích hoạt</label>
                        <label for="" class="radio-inline"><input style="margin-left:-40px;" type="radio" name="status" value="0">Khóa</label>
                    <?php
                }else{
                    ?>
                        <label for="" class="radio-inline"><input type="radio" style="margin-left:-50px;"  name="status" value="1">Kích hoạt</label>
                        <label for="" class="radio-inline"><input style="margin-left:-40px;" type="radio" checked="checked" name="status" value="0">Khóa</label>
                    <?php
                }
            ?>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Thêm tài khoản</button>
    </form>
