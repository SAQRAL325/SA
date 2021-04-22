<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    $username1 = $_SESSION['username'];
}
require_once('connect.php');

$get_news_sql = "SELECT * FROM `login` WHERE username='$username1'";
$get_news_sql = mysqli_query($connection, $get_news_sql);
if ($row = mysqli_fetch_array($get_news_sql)) {
}
$eamil=$row['email'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imgs/GE.png">
    <title>مجموع الدرجات</title>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

.flip-box {
  background-color: black;
  margin-top: 2em;
  margin-left: 185px;
  width: 80%;
  height: 80%;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateX(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  color: #fff;
}

.flip-box-front {
  background-image: url("./imgs/black-background-4.jpg");
}
.flip-box-back {
  background-image: url("./imgs/215123.jpg");
  color: white;
  transform: rotateX(180deg);
}
</style>
<body>
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2 style="color: #fff;">ضع المؤشر هنا</h2>
    </div>
    <div class="flip-box-back">
      <?php 
    echo "<h1>$username1 : اسم المستخدم</h1>";
    echo "<a href='user'><p>تعديل اسم المستخدم</p></a>";
    echo "<h1>$eamil : البريد الالكتروني</h1>";
    echo "<a href='eamil'><p>تعديل البريد الالكتروني</p></a>";
    echo "<a href='pass'><h1>تعديل كلمة المرور</h1></a>";
    echo "<a href='index'><input class='cat' type='submit' value='الرجوع'></a>";
    echo "<a href='idex'><input class='cat' type='submit' value='حذف حسابي'></a>";
    ?>
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        