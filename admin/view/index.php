<?php
    include('../include/header.php');
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
        case 'thanh-vien':
        {
            require_once('../controller/thanhvien/index.php');
        }
    }
    
?>
<div id="wrapper">
    <div id="page-wrapper">
    </div>
    <div class="clearfix"></div>
</div>
<?php 
    include('../include/footer.php');

?>
