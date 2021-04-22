<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    $username1 = $_SESSION['username'];
}
error_reporting(0);

ini_set('display_errors', 0);

require_once('connect.php');
$sql = "SELECT * FROM `login` WHERE username='$username1'";
$get_news_sql = "SELECT * FROM `login` WHERE username='$username1'";
$get_news_sql = mysqli_query($connection, $get_news_sql);
if ($row = mysqli_fetch_array($get_news_sql)) {

}
$eamil1 = $row['email'];

require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
    if(strstr($_POST['eamil1'], '@') && strrchr($_POST['eamil1'], '.')){
        $eamil = mysqli_real_escape_string($connection, $_POST['eamil1']);
        }
        else{
        $email = NULL;
        }


 $sql = "UPDATE `login` SET email = '$eamil' WHERE email = '$eamil1'";
 $result = mysqli_query($connection, $sql);
 if($result){
  $_SESSION['eamil1'] = $eamil;
 }else{

if($eamil != NULL){
    $fmsg = '<h1 class="h1">فشل تعديل البريد الالكتروني او سبق تسجيله</h1>';
}
if($eamil == NULL){
  $fmsg = '<h1 class="h1">البريد غير صحيح</h1>';
}

  
 }
}
if(isset($_SESSION['eamil1'])){
if($fmsg != true){
 $smsg = "<div class='smsg'><h1> تم التعديل </h1></div>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>مجموع الدرجات</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="styles.css" >

 <!-- Latest compiled and minified JavaScript -->
 <script src="" ></script>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/stylesa.css">
    <link rel="icon" href="imgs/GE.png">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">تعديل البريد الالكتروني</h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"></span>
    <input type="text" name="eamil1" class="form-control" placeholder=" البريد الالكتروني  الجديد" required>
  </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block cat" type="submit">ارسال</button>
        <br><br>
      </form>
      <a href="indx"><button class="cat" type="submit">الرجوع</button></a>
</div>
</body>
</html>

</html>