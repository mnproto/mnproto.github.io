<?php

if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $subject = "New email via mnproto.com"

 $mailTo = "logan@mnproto.com";
 $headers = "From: ".$email;
 $txt = "New email from ".$name.".\n\n".$message;
 
 mail($mailTo, $subject, $txt, $headers);
 header("Location: index.html?mailsent");
}
