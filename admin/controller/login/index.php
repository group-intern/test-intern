<?php
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    }
    else
    {
        $action = '';
    }
    switch($action)
    {
        case 'login':
        {
            if(isset($_POST['submit'])){
                $success = array();
                $error = array();
                if(empty($_POST['taikhoan'])){
                    $error[] = 'taikhoan';
                }
                else{
                    $taikhoan = trim($_POST['taikhoan']);
                }
                if(empty($_POST['matkhau'])){
                    $error[] = 'matkhau';
                }
                else{
                    $matkhau = trim(md5($_POST['matkhau']));
                }
                if(empty($error)){
                    $role = '';
                    $tb = 'user';
                    $check_login = $db->login($taikhoan,$matkhau,$role);
                    $success[] = 'login-success';
                    if($check_login == true && $check_login['role']==1){
                        $_SESSION['taikhoan'] = $taikhoan;
                        header('location:http://localhost/Project_Internship/admin/view/index.php');
                    }
                    elseif($check_login == true && $check_login['role']==0){
                        $_SESSION['nguoidung'] = $taikhoan;
                        header('location:http://localhost/Project_Internship/thanhvien/view/index.php?controller=nguoi-dung&action=index');
                    }
                    else{
                        $mesage = "<script> alert ('Tên tài khoản hoặc mật khẩu không đúng')</script>";
                    }
                }
            require_once('../view/login.php');
            break;
            }
        }
        case 'logout':
        {
            require_once('../controller/logout.php');
            break;
        }
    }
?>