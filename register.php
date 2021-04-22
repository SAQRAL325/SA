<?php
error_reporting(0);

ini_set('display_errors', 0);
require_once('connect.php');

if(isset($_POST) & !empty($_POST)){
$username = mysqli_real_escape_string($connection, $_POST['username']);

if(intval($_POST['password']) && strlen($_POST['password']) >= 8){
  $password = ($_POST['password']);
}else{
  $password = NULL;
}
if(strstr($_POST['email'], '@') && strrchr($_POST['email'], '.')){
$email = mysqli_real_escape_string($connection, $_POST['email']);
}
else{
$email = NULL;
}
if($password == NULL){
  $fmsg = '<h1 class="h1">كلمة المرور غير صحيحه</h1><p> ملاحظه* يجب ان لايقل كلمة المرور عن اقل من  8 حروف او ارقام</p>';
}else{
 $sql = "INSERT INTO `login` (username, email, password) VALUES ('$username', '$email', '$password')";
 $result = mysqli_query($connection, $sql);
 if($result){
  $smsg = '<h1>تم تسجيل المستخدم بنجاح</h1>';
  echo'<meta http-equiv="refresh" content="0; ./login">';
 }else{
if($email != NULL && $password != NULL){
  $fmsg = '<h1 class="h1">فشل تسجيل المستخدم او سبق تسجيله</h1>';
}
if($password == NULL){
  $fmsg = '<h1 class="h1">كلمة المرور غير صحيحه</h1><p> ملاحظه* يجب ان لايقل كلمة المرور عن اقل من  8 حروف او ارقام</p>';
}
if($email == NULL){
  $fmsg = '<h1 class="h1">البريد غير صحيح</h1>';
}
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"
></script>
<link
  rel="stylesheet"
  type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css"
/>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="icon" href="imgs/GE.png">
    <title>مجموع الدرجات</title>
</head>
<style>
.ad{
  margin-left: 500px;
}
</style>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading ad">سجل </h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"></span>
    <input type="text" name="username" class="form-control" placeholder="اسم المستخدم" required>
  </div>
        <label for="inputEmail" class="sr-only"></label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="كلمة المرور" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block cat" type="submit">سجل</button>
        <br>
        
        <a class="btn btn-lg btn-primary btn-block" href="login"><p class="cat"><p class="login">تسجيل دخول</p></p></a>
        
      </form>
</div>
</body>
</html>