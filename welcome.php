<?php
 session_start();


 if (isset($_SESSION['username'])) {
 ?>
<?php

$user = $_SESSION['username'];

echo"welcome $user";
echo'<meta http-equiv="refresh" content="0; ./index">';

?>


   
 <?php

 } else {
   ?>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/styless.css">
    <link rel="icon" href="imgs/GE.png">
    <title>مجموع الدرجات</title>
</head>
<body>
<p>اذا لم يتم تحويلك الى الموقع الجديد خلال 3 ثواني فقم</p><a href="index">بالضغط هنا</a>
 </body>

   <?php
 }