<?php
require_once('connect1.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username']);
 $Class = mysqli_real_escape_string($connection, $_POST['Class']);
 $Degree = mysqli_real_escape_string($connection, $_POST['Degree']);

 $sql = "INSERT INTO `login` (username1, Class, Degree) VALUES ('$username', '$Class', '$Degree')";
 $result = mysqli_query($connection, $sql);
 if($result){
  $smsg = '<h1>تم تسجيل الطالب بنجاح</h1>';
 }else{
  $fmsg = '<h1 class="h1">فشل تسجيل الطالب او سبق تسجيله</h1>';
 }
}


?>
<!DOCTYPE html>
<html>
<head>
 <script src="" ></script>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/stylesa.css">
    <link rel="icon" href="imgs/GE.png">
    <title>مجموع الدرجات</title>
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">سجل </h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1"></span>
    <input type="text" name="username" class="form-control" placeholder=" اسم الطالب ثلاثي" required>
  </div><br/><br/>
        <label for="inputClass" class="sr-only"></label>
        <select id="lnamea" name="Class" class="custom-select" style="width:200px;">
          <option value="3/1">1/ثالث متوسط</option>
          <option value="3/2">2/ثالث متوسط</option>
          <option value="3/3">3/ثالث متوسط</option>
          <option value="3/4">4/ثالث متوسط</option>
          <option value="3/5">5/ثالث متوسط</option>
          <option value="3/6">6/ثالث متوسط</option>
          <option value="3/7">7/ثالث متوسط</option>
          <option value="2/1">1/ثاني متوسط</option>
          <option value="2/2">1/ثاني متوسط</option>
          <option value="2/3">1/ثاني متوسط</option>
          <option value="2/4">1/ثاني متوسط</option>
          <option value="2/5">1/ثاني متوسط</option>
          <option value="2/6">1/ثاني متوسط</option>
          <option value="2/7">1/ثاني متوسط</option>
          <option value="1/1">1/اولى متوسط</option>
          <option value="1/2">2/اولى متوسط</option>
          <option value="1/3">3/اولى متوسط</option>
          <option value="1/4">4/اولى متوسط</option>
          <option value="1/5">5/اولى متوسط</option>
          <option value="1/6">6/اولى متوسط</option>
          <option value="1/7">7/اولى متوسط</option>
        </select><br/><br/>
        <input type="text" name="Degree" class="form-control" placeholder=" درجة الطالب" required><input class="cat" type="button" value="/50">
        <br/><br/>
        <button class="btn btn-lg btn-primary btn-block cat" type="submit">سجل!</button>
        <br>
        <a href="index"><input class="cat" type="button" value="الصفحة الرئيسية"></a>
        
      </form>
</div>
</body>
</html>