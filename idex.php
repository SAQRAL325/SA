<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
   
}
$username1 = $_SESSION['username'];
require_once('connect.php');
if(isset($_POST['insert'])){
    $sql = "DELETE FROM `login` WHERE `login`.`username` = '$username1'";
}else{
    $sql = "SELECT * FROM `login`";
}
$result = mysqli_query($connection, $sql);
if($result){
 $_SESSION['username'] = $username1;
}else{

 $fmsg = "<div class='fmsg fmg'>تم ضبط محاولة  فاشلة وغير مصرح بها </div>";

 
}
if(isset($_SESSION['username'])){
$smsg = "<div class='smsg'>تم الحذف</div>";
echo "
<meta HTTP-EQUIV='REFRESH' content='30; ./logout'/>";
}
?>
<head>
<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/segment7" type="text/css"/> 
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=w8QZfnOmpS1MoMq0g9fnnrIgu_8jQZcaMX1THb_zMdFB2XStH-qdWc610D8mbJ6GECdJtxEEwy0Hl_f-0z-AxA" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2Rlc2lnbi5wYXJhbGVsLmNvLmlkL2NvdW50ZG93bi8"/><style type="text/css">
		h1{
			font-family: 'Segment7Standard';
			font-size: 15em;
			color: #969696;
		}

		.container{
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
            display: inline-block;
            position: relative;
		}
    .cat{
    margin-top: 5em;
    margin-left: 800px;
    width: 300px;
    height: 150px;
    border-radius: 30px;
    background-color: #253342;
    color: white;
    font-size: 120%;
    box-shadow: 0 5px #999;
    border: none;
    cursor: pointer;
    transition-duration: 0.08s;
    }.cat:active{
    box-shadow: 0px 0px #666;
    transform: translateY(5px)
    }
    #audio{
        margin-top: 5em;
    margin-left: 2000px;
    }
</style>
<body style='background:#444'>
<div class="container">
		<h1 id="count">10</h1>
        <br>
	</div>
    <audio id="audio" autoplay>
  <source src="./1619098891718.mp3" type="audio/mpeg">
  لا يدعم متصفحك العنصر <code>audio</code>.
</audio>
<form  method="post">
    <a herf="index"><input type="submit" class="cat" name="insert" value="تاكيد"></a>
</form>
<script>
		var counter = 10;

setInterval( function(){
    counter--;

    if( counter >= 0 ){
        id = document.getElementById("count");
        id.innerHTML = counter;
    }

    if( counter === 0 ){
        id.innerHTML = "<meta HTTP-EQUIV='REFRESH' content='0; ./welcome'/>";
    }
}, 2000);

</script>
