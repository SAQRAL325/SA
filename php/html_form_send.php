<?php
 header('Content-Type: text/html; charset=utf-8');
if(isset($_POST['email'])) {

    // قم بتعديل السطرين أدناه
    $email_to = "lamua1122@gmail.com";
    $email_subject = "Email from : Saudi Arabia";

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: php/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<?php
    echo "<script type='text/javascript'>alert('شكرا لتواصلك، سيتم قراءة الرسالة والرد بأقرب وقت ممكن')</script>";
    echo "<script> window.location.assign('../index'); </script>";
?> 
 
<?php
}
?>