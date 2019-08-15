
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
        case 'add':
            {
            if(isset($_POST['submit'])){
                $success = array();
                $error = array();
                $hoten = '';
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
                if((trim($_POST['matkhau']))!=trim($_POST['nhaplaimatkhau'])){
                    $error[] = 'nhaplaimatkhau';
                }
                else {
                    $nhaplaimatkhau = trim(md5($_POST['nhaplaimatkhau']));
                }
                if(empty($_POST['hoten']) && is_int($_POST['hoten'])){
                }
                else{
                    $hoten = $_POST['hoten'];
                }
                    $ngaytao = $_POST['ngaytao'];
                    $role = $_POST['role'];
                    $status = $_POST['status'];
                if(empty($error)){
                    $db->Insert($taikhoan,$matkhau,$hoten,$role,$ngaytao,$status);
                    $success[] ='add_succces';
                }
            }
            require_once('../view/add_user.php');
                break;
    }
        case 'edit':
            {
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = 'user';
                $dataInsert = $db->getDataInsert($tblTable,$id);
            }
            if(isset($_POST['submit'])){
                $success = array();
                $error = array();
                if(empty($_POST['taikhoan'])){
                    $error[] = 'taikhoan';
                }
                else{
                    $taikhoan = $_POST['taikhoan'];
                }
                
                if(empty($_POST['matkhau'])){
                    $error[] = 'matkhau';
                }
                else{
                    $matkhau = trim(md5($_POST['matkhau']));
                }
                if((trim($_POST['matkhau']))!=trim($_POST['nhaplaimatkhau'])){
                    $error[] = 'nhaplaimatkhau';
                }
                else {
                    $nhaplaimatkhau = trim(md5($_POST['nhaplaimatkhau']));
                }
                if(empty($_POST['hoten'])){
                    $error[] = 'hoten';
                }
                else{
                    $hoten = $_POST['hoten'];
                }
                    $ngaytao = $_POST['ngaytao'];
                    $role = $_POST['role'];
                    $status = $_POST['status'];
                if(empty($error)){
                    $db->Update($id,$taikhoan,$matkhau,$hoten,$role,$ngaytao,$status);
                    $success[] ='up_succces';
                }
            }
            require_once('../view/edit_user.php');
            break;
        }
        case 'delete':
            {
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = 'user';
                $db->Delete($id);
                header('location:index.php?controller=thanh-vien&action=list');
            }
            require_once('../view/delete_user.php');
            break;
        }
        case 'list':
        {
            $tblTable = 'user';
            $data = $db->getAllData($tblTable);
            require_once('../view/list_user.php');
            break;
        }
        default:{
            require_once('../view/list_user.php');
            break;
        }
    }
?>