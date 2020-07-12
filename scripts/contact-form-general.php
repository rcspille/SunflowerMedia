<!-- CONTACT FORM SCRIPT -->
<?php
date_default_timezone_set("America/Phoenix");

// define variables and set to empty values
$name = $email = $phone = $company = $message = "";
$nameErr = $emailErr = $phoneErr = $companyErr = $messageErr = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])){
    $nameErr = "Name is required.";
  } else {
    $name = test_input($_POST["name"]);
    $nameErr = "";
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed.";
    }
  }

  if (empty($_POST["email"])){
    $emailErr = "Email is required.";
  } else {
    $email = test_input($_POST["email"]);
    $emailErr = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format.";
    }
  }

  if (empty($_POST["phone"])){
    $phoneErr = "";
  } else {
    $phone = test_input($_POST["phone"]);
    $phoneErr = "";
    if (!preg_match("/^[0-9 + ( )]{0,20}$/",$phone)) {
      $phoneErr = "Only 0-9, +, () allowed.";
    }
  }

  if (empty($_POST["company"])){
    $companyErr = "";
  } else {
     $company = test_input($_POST["company"]);
  }

  if (empty($_POST["message"])){
    $messageErr = "Message is required.";
  } else {
    $message = test_input($_POST["message"]);
    $messageErr = "";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $phoneErr == "" && $companyErr == "" && $messageErr == "") {
  $to = "spiller.riley@gmail.com";
  $emailSubject = "Sunflwr Contact Form";
  $txt = "<b>From:</b> " .$name. "<br><b>Email:</b> " .$email. "<br><b>Phone:</b> " .$phone. "<br><b>Company:</b> " .$company. "<br><b>Message:</b><br>" .$message. "<br><br><br>Sent on ".date("d-m-Y")." at ".date("H:i")." Arizona time.<br>Sent from ".htmlspecialchars($_SERVER['PHP_SELF']);
  $headers = "reply-to: ".$email. "\r\n";
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail($to,$emailSubject,$txt,$headers)
    or die();
  $success = "Mail sent successfully! We&#39;ll have someone with you soon.";
}
?>
