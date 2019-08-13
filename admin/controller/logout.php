<?php
    if(isset($_SESSION['taikhoan'])){
        session_destroy();
        header('location:../view/login.php?controller=dang-nhap&action=login');
    }
?>