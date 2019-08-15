<?php ob_start(); ?>
<?php session_start(); ?>
<?php
    if(!isset($_SESSION['taikhoan'])){
        header('location: login.php?controller=dang-nhap&action=login');
}
?>
<?php
    include('../include/header.php');
    include('../include/sidebar.php');
    include('../include/footer.php');
    include('../include/sidebar_right.php');
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
    ?>
    <div class="wrapper">
          <?php include('../include/content.php') ?>
    </div>
    <?php
    }
    switch($controller)
    {
        case 'thanh-vien':
        {
            require_once('../controller/thanhvien/index.php');
        }
    }
?>
<?php ob_flush();?>