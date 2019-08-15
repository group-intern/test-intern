<?php session_start(); ?>
<?php
    if(isset($_SESSION['taikhoan'])){
        header('location:index.php');
}
?>
<?php
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
      case 'dang-nhap':
      {
          require_once('../controller/login/index.php');
      }
  }
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="../Template/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../Template/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../Template/css/font-awesome.css" rel="stylesheet"> 
    <!-- jQuery -->
    <script src="../Template/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->  
    <!-- Bootstrap Core JavaScript -->
    <script src="../Template/js/bootstrap.min.js"></script>
</head>
<?php
?>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <?php if(isset($mesage)) echo $mesage; ?>
  <div class="app-cam">
	  <form method="POST">
      <input style="background:#3498db; color:#fff" type="text" class="text" value="<?php if(isset($_POST['taikhoan'])) echo $_POST['taikhoan'] ?>" placeholder="Tài khoản" name="taikhoan">
      <?php
            if(isset($error) && in_array('taikhoan',$error)){
                echo "<label class='error'>Tài khoản không được để trống</label>";
            }?>
      <input style="background:#3498db; color:#fff" type="password" value="" placeholder="**********" name="matkhau">
      <?php
            if(isset($error) && in_array('matkhau',$error)){
                echo "<label class='error'>Mật khẩu không được để trống</label>";
            }?>
      <div class="submit"><input type="submit" name="submit" value="Login"></div>
      <div class="login-social-link" style="width:400px; margin-left:65px;">
            <a title="Trang chủ" href="http://localhost/Project_Internship/" class="facebook">
                Về lại trang chủ
            </a>
          </div>
      <ul class="new">
        <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
        <li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
        <div class="clearfix"></div>
      </ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
   </div>
</body>
</html>
