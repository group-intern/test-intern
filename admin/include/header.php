<?php ob_start(); ?>
<?php session_start();?>
<?php
if(!isset($_SESSION['taikhoan'])){
	header('location:../view/login.php?controller=dang-nhap&action=login');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../Template/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../Template/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../Template/css/lines.css" rel='stylesheet' type='text/css' />
<link href="../Template/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../Template/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="../Template/css/custom.css" rel="stylesheet">

<!-- Metis Menu Plugin JavaScript -->
<script src="../Template/js/metisMenu.min.js"></script>
<script src="../Template/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="../Template/js/d3.v3.js"></script>
<script src="../Template/js/rickshaw.js"></script>
</head>
	 <!-- Navigation -->
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Modern</a>
            </div>
			<!-- /.navbar-header -->
			
            <ul class="nav navbar-nav navbar-right">
				  <div class="btn-group">
					<button style="margin-top:10px;margin-right:10px;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php
    		if(isset($_SESSION['taikhoan'])){
        		echo "Xin chào,"."<b style='color:#3498db'>".$_SESSION['taikhoan']."</b>";
			}
			?><span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="../view/login.php?controller=dang-nhap&action=logout">Đăng xuất</a></li>
						<li><a href="#">Something else here</a></li>
					</ul>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
        <?php
            include('../include/sidebar.php');
        ?>
            <!-- /.navbar-static-side -->
        </nav>