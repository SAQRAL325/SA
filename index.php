<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    $username1 = $_SESSION['username'];
}else{
    header('location: /SE/logout');
}

error_reporting(0);

ini_set('display_errors', 0);

require_once('connect1.php');
if($usernamef == NULL){
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username1']);

 $sql = "SELECT * FROM `login` WHERE username1='$username'";
 $get_news_sql = "SELECT * FROM `login` WHERE username1='$username'";
 $get_news_sql = mysqli_query($connection, $get_news_sql);
 if ($row = mysqli_fetch_array($get_news_sql)) {

 }
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
  $_SESSION['username1'] = $username;
 }else{
   if($fmsgf != true AND $smsgf != true){
  $fmsg = '<br><h1 id="sz"> لاضافة طالب </h1>
  <h1 class="sg">لم يتم اضافة الطالب</h1><a class="cat" href="register1"><input class="cat sl" type="button" value= " اضغط هنا"></a>';
  
 }
}
}
}
$usernamee = $row['username1'];
$Degrea = $row['Degree'];
$Class = $row['Class'];

if($Degrea >= 1){
  $Degre = $row['Degree'];
}else{
  $Degre="لم يتم رصد الدرجة لهاذا الطالب";
}

if($fmsg != true AND  $usernamee != NULL){
if(isset($_SESSION['username1'])){
 $smsg = "<h1 id='sa'> الطالب متاح </h1>";
 echo "<h1 id='se'>  الاسم : $usernamee الصف   </h1>";
 echo "<h1 id='se'> $Class:   </h1>";
 if($Degrea <= 0){
 echo "<h1 id='se'> الدرجة : $Degre     </h1>";
 }else{
  echo "<h1 id='se'>  $Degre   : الدرجة </h1>";
 }
} 
}

require_once('connect1.php');
if($usernamee == NULL){
if(isset($_POST) & !empty($_POST)){
 $usernamef = mysqli_real_escape_string($connection, $_POST['usernamef']);
 $resul = mysqli_real_escape_string($connection, $_POST['resul']);
 $resu = mysqli_real_escape_string($connection, $_POST['resu']);

 $resull = $resul / 6;
 $resuu = $resull +  $resu;
 $Degreef = $resuu / 2;
 
 $sql1 = "UPDATE `login` SET Degree = '$Degreef' WHERE username1 = '$usernamef'";
 $get_news_sql1 = "SELECT * FROM `login` WHERE username1='$usernamef'";
 $get_news_sql1 = mysqli_query($connection, $get_news_sql1);
 if ($row1 = mysqli_fetch_array($get_news_sql1)) {

 }
 $Class1 = $row1['Class'];
 $result1 = mysqli_query($connection, $sql1);
 if($result1){
  $_SESSION['Degree'] = $Degreef;
 }else{

  $fmsgf = "<div class='fmsg fmg'>تم ضبط محاولة فاشلة وغير مصرح بها </div>";

  
 }
}
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imgs/GE.png">
    <title>مجموع الدرجات</title>
</head>
<style>
  *{
    background-color: #e8e4d7;
}
  .sg{
    float: right;
    margin-top: -5em;
  }
  #sae{
    margin-top: 0em;
  }
  .sl{
    margin-right: 150px;
    float: right;
    margin-top: -4.5em;
  }
  #asaaae{
    float: right;
    margin-top: 0em;
  }
  #sa{
    float: right;
    margin-top: -6em;
}
#sz{
  float: right;
    margin-top: -3em;
}
  .m{
    float: right;
    margin-right: -550px;
    margin-top: 0.5em;
}
.fm{
  float: right;
    margin-right: -450px;
    margin-top: 0.5em;
}
.gm{
  float: right;
    margin-right: -250px;
    margin-top: 0.5em;
}
.h{
    float: right;
    margin-right: -450px;
    margin-top: 0.5em;
}
.saui{
  float: right;
  margin-top: 0.5em;
  margin-right: -50px;
}
.sui{
  float: right;
  margin-top: -0.5em;
  margin-right: 10px;
}
.gh{
  float: right;
  margin-top: -0.5em;
    margin-right: 0px;
}
.fh{
  float: right;
  margin-top: -0.5em;
    margin-right: 0px;
}
#asaaa{
  float: right;
    margin-top: 0em;
    margin-right: 440px;
}
#wa{
  margin-top: -1em;
  margin-left: 100px;
  float: left;
  background-color: #253342;
}
.cath{
    width: 190px;
    height: 50px;
    margin: 20px;
    border-radius: 30px;
    background-color: #999;
    color: white;
    font-size: 120%;
    box-shadow: 0 5px white;
    border: none;
    cursor: pointer;
    transition-duration: 0.08s;
    }.cath:active{
    box-shadow: 0px 0px #666;
    transform: translateY(5px)
    }
    #logo{
      float: right;
        width: 15%;
        margin: 20px;
        font-size: 18px;
        margin-top: 10em;
    }
    #logoo{
        float: right;
        width: 15%;
        margin: -350px;
        font-size: 18px;
        margin-top: 10em;
    }
    #logooo{
      float: right;
        width: 15%;
        margin: 20px;
        font-size: 18px;
        margin-top: 10em;
    }
    #logoogo{
      float: right;
        width: 15%;
        margin: -400px;
        font-size: 18px;
        margin-top: 10em;
    }
    #logog{
      float: right;
        width: 15%;
        margin: 0px;
        font-size: 18px;
        margin-top: 10em;
    }
    #logogo{
      float: right;
        width: 15%;
        margin: 0px;
        font-size: 18px;
        margin-top: 10em;
    }
</style>

  <?php 
  if(isset($_SESSION['username1'])){
    if($Degrea <= 0  AND $fmsg != true AND $usernamee == true){
      echo '<a href="register1"><input id="button" class="cat m" type="button" value="تسجيل طالب"></a>
      <a href="#asa"><input id="button" class="cat m" type="button" value="استعلم"></a>
      <a href="indx"><input class="cat sui" type="submit" value="الإعدادت"></a>';
      }else{
        if($usernamee == true){
          echo '<a href="register1"><input id="button" class="cat fm" type="button" value="تسجيل طالب"></a>
          <a href="#asa"><input id="button" class="cat gm" type="button" value="استعلم"></a>
          <a href="indx"><input class="cat saui" type="submit" value="الإعدادت"></a>';
        }
        if($usernamee != true){
        echo '<a href="register1"><input id="button" class="cat gh" type="button" value="تسجيل طالب"></a>
        <a href="#asa"><input id="button" class="cat gh" type="button" value="استعلم"></a>
        <a href="indx"><input class="cat sui" type="submit" value="الإعدادت"></a>';
        }else{
        if($fmsg == true){
          echo '<a href="register1"><input id="button" class="cat gfh" type="button" value="تسجيل طالب"></a>
          <a href="#asa"><input id="button" class="cat gfh" type="button" value="استعلم"></a>
          <a href="indx"><input class="cat sui" type="submit" value="الإعدادت"></a>';
        }
      }

      }
  }else{
    echo '<a href="register1"><input id="button" class="cat fh" type="button" value="تسجيل طالب"></a>
    <a href="#asa"><input id="button" class="cat fh" type="button" value="استعلم"></a>
    <a href="indx"><input class="cat sui" type="submit" value="الإعدادت"></a>';
  } 
  ?>
    <h1 id="value4"><em>حساب درجة يوم الحفظ </em></h1><br/><br/>
    <?php 
    echo "<h1>$username1  مرحبا</h1>";
    ?>
    <input type="text" name="resut" id="value9" class="input value9"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resutl" id="resutl" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valuea"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resutl" id="resuta" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valueb"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resutl" id="resutb" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valuec"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resutc" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valued"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required> 
    <input type="text" disabled="disabled" name="resut" id="resutd" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>

    <input type="text" disabled="disabled" name="resut" id="resute" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>
    <p><em>ملاحظه *<br/>اذا كان هناك صفر ارجاء عدم تخطيه الرجاء كتابة الصفر </em></p><br/><br/>


    <?php
      if(isset($_SESSION['username1'])){
        if($Degrea <= 0  AND $fmsg != true){
          echo '<img src="imgs/GE.png" id="logooo">';
          }else{
            if($usernamee == true){
              echo '<img src="imgs/GE.png" id="logoogo">';
            }
            if($usernamee != true){
            echo '<img src="imgs/GE.png" id="logogo">';
            }else{
            if($fmsg == true){
              echo '<img src="imgs/GE.png" id="logog">';
            }
          }

          }
      }else{
        echo '<img src="imgs/GE.png" id="logo">';
      } 
    
    ?>
    <h1 id="value3"><em>حساب درجة اسبوع الحفظ </em></h1><br/><br/><br/><br/><br/>
    <input type="text" name="resut" id="value3" class="input value3"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resut" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>

    <br/><input type="text" name="resut2" id="value3" class="input value4"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut2" id="resut2" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut3" id="value3" class="input value5"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resut3" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut4" id="value3" class="input value6"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resut4" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut5" id="value3" class="input value7"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut5" id="resut5" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut6" id="value3" class="input value8"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required> 
    <input type="text" disabled="disabled" name="resut6" id="resut6" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>

    <input type="text" disabled="disabled" name="resut7" id="resut7" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>
    <p><em>* ملاحظه<br/>اذا كان هناك صفر ارجاء عدم تخطيه الرجاء كتابة الصفر </em></p><br/><br/>



    <br/><h1><em>حساب درجات اختبار الحفظ </em></h1><br/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <?php if(isset($smsgf)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsgf; ?> </div><?php } ?>
      <?php if(isset($fmsgf)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsgf; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
    <form action="PayslipServlet" method="get">
        <input type="text" name="usernamef" id="name" class="input valuel" placeholder="اسم الطالب" maxlength="1000" cols="25"
        rows="6" required><br/>
        <input type="text" name="resul" class="input value1"  placeholder="درجة الاسابيع" maxlength="1000" cols="25"
        rows="6" required>
        =  <input type="text" disabled="disabled" name="resul" id="resul"  placeholder="النتيجة" maxlength="1000" cols="25"
        rows="6" required><br/>
        <input type="text" name="resu" class="input value2"  placeholder="درجة الاختبار" maxlength="1000" cols="25"
        rows="6" required>
        =  <input type="text" disabled="disabled" name="Degreef" id="resu" placeholder="المجموع النهائي" maxlength="1000" cols="25"
        rows="6" required><br/>
        <br>
      <input class="cat" type="submit" value="إظهار النتيجة" onClick="pr()">
      </form>
      </form>
      <?php
      if($fmsgf != true AND  $usernamef != NULL){
        if(isset($_SESSION['Degree'])){
        $fmsg = false;
         $smsgf = "<h1 id='saa'> الطالب متاح </h1>";
         echo "$smsgf";
         echo "<h1 id='sae'>  الاسم : $usernamef    </h1>";
         echo "<h1 id='sae'>$Class1 :  الصف </h1>";
         if($Degrea <= 0){
         echo "<h1 id='sae'> الدرجة : $Degreef     </h1>";
         }else{
          echo "<h1 id='sae'>  $Degreef   : الدرجة </h1>";
         }
        } 
        }
      ?>
      <br>




      <div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h1 id="asa" class="form-signin-heading">استعلام عن طالب</h1>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"></span>
    <input id="namea" type="text" name="username1" class="form-control" placeholder=" اسم الطالب ثلاثي" required>
  </div>
        <a href="#asa"><input id="asaa"  class="cat" type="submit" value="استعلام"></a>
        <a href="#asa"><button id="asaa"  class="cat" type="submit">استعلام</button></a>
</form>
<?php 

if(isset($_SESSION['username1'])){
  if($fmsg != true AND $usernamee == true){
  $smsgg = '<a href="welcome"><button class="cat" id="asaaa" type="submit"> حذف الاستعلام</button></a>';
  echo $smsgg;  
}
}
?>
</body>

<br><br><br><br><br><br><br><br>
<a href="logout"><input id="asdf" class="cat" type="button" value= "تسجيل خروج"></a>


<script src="index.js"></script>
<script src="index1.js"></script>


<section id="wsfoter">
<div class="col-2" style="background-color: #253342;">
  <h1 id="wa">تواصل معنا</h1><br><br>
					<!-- Kontakt form -->
					<form name="htmlform" method="post" action="php/html_form_send.php" style="background-color: #253342;">
						<table id="contact-form" dir="rtl" style="background-color: #253342;">
							<tr>
								<td style="background-color: #253342;"><input type="textt" name="first_name" placeholder="الاسم *" maxlength="50" size="30"
										required style="background-color: none"></td>
							</tr>
							<tr>
								<td style="background-color: #253342;"><input type="textt" name="last_name" placeholder="اللقب *" maxlength="50" size="30"
										required style="background-color: none;"></td>
							</tr>
							<tr>
								<td style="background-color: #253342;"><input type="emaill" name="email" placeholder="الايميل *" maxlength="80" size="30"
										required style="background-color: none"></td>
							</tr>
							<tr>
								<td style="background-color: #253342;"><input type="textt" name="telephone" placeholder="رقم الهاتف" maxlength="30"
										size="30" style="background-color: none"><br></td>
							</tr>
							<tr>
								<td style="background-color: #253342;"><textarea name="comments" placeholder="رسالتك هنا *" maxlength="1000" cols="25"
										rows="6" required style="background-color: none">
	 </textarea></td style="background-color: #253342;">
							</tr>
							<tr>
								<td style="background-color: #253342;"><input  class="cath" type="submit" value="ارسال"></td>
							</tr>
						</table>
					</form>
					<!-- Kontakt Form -->
					<!--<input id="submit" type="reset" value="افراغ الحقول">-->


				</div>
    <p style="background-color: #253342;"> ©جميع الحقوق محفوظة  لصاحب الموقع</p>
    <p style="background-color: #253342;">Email: <a style="background-color: #253342;" href="mailto:muhana2018.hg@icloud.com">muhana2018.hg@icloud.com</a></p>
    <a style="background-color: #253342;" href="index1"><input class="cate" type="button" value="اضغط هنا لتقييم"></a>
</section>
</html>