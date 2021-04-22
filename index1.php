<?php
error_reporting(0);

ini_set('display_errors', 0);
require_once('connect3.php');
if(isset($_POST) & !empty($_POST)){
 $happy = mysqli_real_escape_string($connection, $_POST['happy']);

 $sql = "INSERT INTO `lika` (happy) VALUES ('$happy')";
 $result = mysqli_query($connection, $sql);
 if($result){
  $smsg = '<h1>شكراً على تقييم</h1>';
 }else{
  $fmsg = '<h1 class="h1">لم يتم التقييم</h1>';
 }
}

if(isset($_POST) & !empty($_POST)){
  $meh = mysqli_real_escape_string($connection, $_POST['meh']);
 
  $sql1 = "INSERT INTO `lika` (meh) VALUES ('$meh')";
  $result1 = mysqli_query($connection, $sql1);
  if($result1){
   $smsg = '<h1>شكراً على تقييم</h1>';
  }else{
   $fmsg = '<h1 class="h1">لم يتم التقييم</h1>';
  }
 }

 if(isset($_POST) & !empty($_POST)){
  $sad = mysqli_real_escape_string($connection, $_POST['sad']);
 
  $sql2 = "INSERT INTO `lika` (sad) VALUES ('$sad')";
  $result2 = mysqli_query($connection, $sql2);
  if($result2){
   $smsg = '<h1>شكراً على تقييم</h1>';
  }else{
   $fmsg = '<h1 class="h1">لم يتم التقييم</h1>';
  }
 }
 
$get_news_sql = "SELECT sum(happy) FROM `lika`";
$get_news_sql = mysqli_query($connection, $get_news_sql);
while ($row = mysqli_fetch_array($get_news_sql)) {
  $ha = $row["sum(happy)"];
}

$get_news_sql1 = "SELECT sum(meh) FROM `lika`";
$get_news_sql1 = mysqli_query($connection, $get_news_sql1);
while ($row1 = mysqli_fetch_array($get_news_sql1)) {
  $mh = $row1["sum(meh)"];
}

$get_news_sql2 = "SELECT sum(sad) FROM `lika`";
$get_news_sql2 = mysqli_query($connection, $get_news_sql2);
while ($row2 = mysqli_fetch_array($get_news_sql2)) {
  $sd = $row2["sum(sad)"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imgs/GE.png">
    <title>مجموع الدرجات</title>
</head>
<style>
#ha{
  margin-top:0.5em ;
  margin-right: 320px;

}


.btnk {
  background-color:  #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btnk:hover {
  background-color: #ffb600;
  color: white;
}


.btng {
  background-color:  #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btng:hover {
  background-color: red;
  color: white;
}

.btnh {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btnh:hover {
  background-color: #3e8e41;
  color: white;
}


#mh{
  margin-top:-2.5em ;
  margin-right: -320px;
}
#sd{
  margin-top:-2.3em ;
  margin-right: 0px;
}
</style>
<div id="body">
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
    <form class="form-signin" method="POST">
      <h1 id="h1">التقييم?</h1>
      <input class="hide" type="checkbox" title="Happy" name="happy" id="happy" value='1'>
      <label for="happy" class="option-happy btnh">سعيد</label>

      
      <input class="hide" type="checkbox" title="Sad" name="sad" id="sad" value='1'>
      <label for="sad" class="option-sad btng">غاضب</label>
      <input class="hide" type="checkbox" title="Meh" name="meh" id="meh" value='1'>
      <label for="meh" class="option-meh btnk">جيد جداً</label><br>
      <?php 
      echo "<p id='ha'>🙂 : $ha</p>";
      echo "<p id='sd'>😡 : $sd</p>";
      echo "<p id='mh'>😐 : $mh</p>";
      ?>
      <span id="resulte" maxlength="1000" cols="25"
       rows="6" required></span><br>
       <button class="btn btn-lg btn-primary btn-block cat" type="submit">ارسل التقييم</button>
       <a href="index"><input class="cat" type="button" value="الصفحة الرئيسية"></a>
       
    </form>
  </div>
