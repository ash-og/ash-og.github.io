<?php
if(isset($_POST["SubmitBtn"])){

  $to = "aisling.young4@gmail.com";
  $subject =$_POST["subject"];
  $from=$_POST["email"];
  $msg=$_POST["message"];
  $headers = "From: $from";

  mail($to,$subject,$msg,$headers);
  echo "Email successfully sent.";
}
?>
