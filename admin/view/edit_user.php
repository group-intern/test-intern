<div id="wrapper" style="width:70%; margin-left:260px;">
    <div id="page-wrapper">
    <form class="form-register" id="form_add"action="" method="POST" role="form">
        <?php
            if(isset($success) && in_array('up_succces',$success)){
                echo "<p class='alert alert-success'>Update thành công, <a href='index.php?controller=thanh-vien&action=list'>Xem danh sách</a></p>";
            }
        ?>
    <h3>Cập nhật thành viên</h3>
        <div class="form-group">
            <label for="">Tài khoản</label>
            <input type="text" class="form-control" id="taikhoan" name="taikhoan" placeholder="Tên tài khoản" value="<?=$dataInsert['username']?>">
            <?php
            // if(isset($error) && in_array('taikhoan',$error)){
            //     echo "<p class='error'>Tài khoản không được để trống</p>";
            // }?>
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Mật khẩu" ?>
            <?php
            // if(isset($error) && in_array('matkhau',$error)){
            //     echo "<p class='error'>Mật khẩu không được để trống</p>";
            // }?>
        </div>
        <div class="form-group">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="nhaplaimatkhau" name="nhaplaimatkhau" placeholder="Nhập lại mật khẩu" >
            <?php
            // if(isset($error) && in_array('nhaplaimatkhau',$error)){
            //     echo "<p class='error'>Mật khẩu không trùng nhau</p>";
            // }?>
        </div>
        <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Họ tên" value="<?=$dataInsert['hoten']?>">
            <?php
            // if(isset($error) && in_array('hoten',$error)){
            //     echo "<p class='error'>Họ tên không được để trống</p>";
            // }?>
        </div>
        <div class="form-group">
        
            <label for="">Ngày tạo</label>
            <input type="text" class="form-control" id="" name="ngaytao" placeholder="Ngày đăng kí" value="<?=$dataInsert['ngaytao']?>">
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
                        <label for="" class="radio-inline"><input type="radio"  checked="checked" name="status" value="1">Kích hoạt</label>
                        <label for="" class="radio-inline"><input  type="radio" name="status" value="0">Khóa</label>
                    <?php
                }else{
                    ?>
                        <label for="" class="radio-inline"><input type="radio"   name="status" value="1">Kích hoạt</label>
                        <label for="" class="radio-inline"><input  type="radio" checked="checked" name="status" value="0">Khóa</label>
                    <?php
                }
            ?>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
    </form>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    jQuery.validator.setDefaults({
    success: "valid"
    });
    $("#form_add").validate({
    rules: {
        taikhoan: {
        required: true,
        minlength: 5,
        maxlength: 10
        },
        matkhau: {
        required: true,
        minlength: 6,
        },
        nhaplaimatkhau: {
            required: true,
            minlength: 6,
            equalTo: "#matkhau"
        },
        hoten: {
        required: true,
        minlength: 5,
        },
    },
    messages: {
        taikhoan: {
            required: "Vui lòng nhập tên tài khoản",
            minlength: "Tài khoản phải có tối đa 5 kí tự",
            maxlength: "Tài khoản không được quá 10 kí tự"
        },
        matkhau: {
            required: "Vui lòng nhập mật khẩu",
            minlength: "Mật khẩu phải có tối đa 6 kí tự"
        },
        nhaplaimatkhau: {
            required: "Vui lòng nhập lại mật khẩu",
            minlength: "Nhập lại mật khẩu phải có tối đa 6 kí tự",
            equalTo: "Mật khẩu không trùng nhau",
        },
        hoten: {
            required: "Vui lòng nhập họ tên",
            minlength: "Họ tên phải có tối đa 5 kí tự"
        },
    }
    });
</script>