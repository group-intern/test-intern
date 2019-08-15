<?php
session_start();
    include('../model/db_connect.php');
    $db = new Database();
    $db ->connect();
    if(isset($_GET['controller']))
    {
        $controller = $_GET['controller'];
    }
    else
    {
        $controller = '';
    }
    switch($controller)
    {
        case 'nguoi-dung':
        {
            require_once('../controller/nguoidung/index.php');
        }
    }
    
?>
ĐÂY LÀ TRANG NGƯỜI DÙNG </br>
<?php
    if(isset($_SESSION['nguoidung']))
    echo "Xin chào user:".$_SESSION['nguoidung'];
?> 
<a href="http://localhost/Project_Internship/admin/view/login.php?controller=dang-nhap&action=login">Đăng xuất</a>
<!-- <div id="wrapper">
    <div id="page-wrapper">
    </div>
    <div class="clearfix"></div>
</div> -->
<?php 
    //include('../include/footer.php');

?>
