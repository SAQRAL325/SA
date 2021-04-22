<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username']);
 $email = mysqli_real_escape_string($connection, $_POST['username']);
 $password = ($_POST['password']);
?>
<?php
 $sql = "SELECT * FROM `login` WHERE password='$password' AND username='$username' or email='$email'";
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
  $_SESSION['username'] = $username;
 }else{

  $fmsg = "<div class='fmsg fmg'>تم ضبط محاولة دخول فاشلة وغير مصرح بها </div>";

  
 }
}
if(isset($_SESSION['username'])){
 $smsg = "<div class='smsg'>دخول ناجح</div>";
 echo "
 <meta HTTP-EQUIV='REFRESH' content='0; url=welcome.php'/>";
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
<title>مجموع الدرجات</title>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/sylesa.css">
    <link rel="icon" href="imgs/GE.png">
</head>
<style>
  .cat{
    width: 190px;
    height: 50px;
    margin: 20px;
    border-radius: 30px;
    background-color: #253342;
    color: white;
    font-size: 100%;
    box-shadow: 0 5px white;
    border: none;
    cursor: pointer;
    transition-duration: 0.08s;
    }.cat:active{
    box-shadow: 0px 0px #666;
    transform: translateY(5px)
    }
  a{
    text-decoration: none;
    cursor: pointer;
    width: 120px;
}
  .field {
  width: 300px;
  position: relative;
  margin: 20px;
}
.field input {
  width: 100%;
  line-height: 40px;
  text-indent: 10px;
}
.field .glyphicon {
  position: absolute;
  right: 10px;
  top: 11px;
  font-size: 20px;
  color: #1c90f3;
  cursor: pointer;
}
.field .glyphicon.active {
  color: #ccc;
}
.ssf{
  margin-left: 400px;
  margin-top: -10em;
}
.ad{
  margin-left: 500px;
}
</style>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="ad form-signin-heading">تسجيل الدخول</h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"></span>
    <input type="text" name="username" class="form-control" placeholder=" البريد الالكتروني او اسم المستخدم" required>
  </div>
  <div class="field">
  <label for="input Password" class="sr-only"></label>
        <input type="password" name="password" id="input Password" class="form-control" placeholder="كلمة المرور" required>
        <i class="glyphicon glyphicon-eye-open"></i>
</div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">تسجيل الدخول</button>
        <br>
      </form>
      <a href="register"><button class="btn btn-lg btn-primary btn-block" type="submit">تسجيل</button></a>
</div>
<p class="ssf"><a href="logint">نسيت كلمة المرور</a></p>
</body>
<script>
  $('.field .glyphicon').on('click', function() {
  var attr =
    $(this)
      .prev()
      .attr('type') == 'password'
      ? 'text'
      : 'password';
  $(this)
    .prev()
    .attr('type', attr);
  $(this).toggleClass('active');
});
</script>
</html>