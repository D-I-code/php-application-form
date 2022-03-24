
<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$nameErr = $surnameErr = $emailErr = $confirmEmailErr = $addressErr = $phoneNumberErr = $postCodeErr = $genderErr = $fileErr = "";
$name = $surname = $email = $confirmEmail = $address = $phoneNumber = $postCode = $gender = $file = "";
$nameValid = $surnameValid = $emailValid = $confirmEmailValid = $addressValid = $phoneNumberValid = $postCodeValid = $genderValid = $fileValid = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  if (empty($_POST["name"])) {
    $nameErr = "* Name is required!";
  } elseif (!preg_match ("/^[a-zA-z-]*$/", $name)) {
      $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Only alphabets and whitespace are allowed in Name. </p>";
      echo $ErrMsg;
  }else {
    echo $name;
    $nameValid = True;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $surname = $_POST["surname"];
  if (empty($_POST["surname"])) {
    $surnameErr = "* Surname is required!";
  } elseif (!preg_match ("/^[a-zA-z-]*$/", $surname) ) {
      $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Only alphabets and whitespace are allowed in Surname. </p>";
      echo $ErrMsg;
  }else {
    echo $surname;
    $surnameValid = True;
  }



  if (empty($_POST["email"])) {
    $email = $_POST["email"];
    $emailErr = "* Email is required!";
  } elseif (!preg_match ("/^[a-zA-z . @ 0-9]*$/", $email) ) {
      $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Invalid values used in Email. </p>";
      echo $ErrMsg;
  }else {
    echo $email;
    $emailValid = True;
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $confirmEmail = $_POST["confirm"];
  if (empty($_POST["confirm"])) {
    $confirmEmailErr = "* Confirm email is required!";
  } elseif (!preg_match ("/^[a-zA-z . @ 0-9]*$/", $confirmEmail) ) {
      $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Invalid values used in Confirm Email. </p>";
      echo $ErrMsg;
    } elseif ($email != $confirmEmail) {
        $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Emails do not match! </p>";
        echo $ErrMsg;
  }else {
    echo $confirmEmail;
    $confirmEmailValid = True;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $address = $_POST["address"];
  if (empty($_POST["address"])) {
    $addressErr = "* Address is required!";
  } elseif (!preg_match ("/^[a-zA-z , 0-9]*$/", $address) ) {
      $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Invalid values used in Address. </p>";
      echo $ErrMsg;
  }else {
    echo $address;
    $addressValid = True;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $phoneNumber = $_POST["phoneNumber"];
  if (empty($_POST["phoneNumber"])) {
    $phoneNumberErr = "* Phone number is required!";
  } elseif (!preg_match ("/^[0-9]*$/", $phoneNumber)) {
    $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Only numeric values are allowed in phone number! </p>";
    echo $ErrMsg;
  } else {
    echo $phoneNumber;
    $phoneNumberValid = True;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $postCode = $_POST["postcode"];
  if (empty($_POST["postcode"])) {
    $postCodeErr = "* Post code is required!";
  } elseif (!preg_match ("/^[a-zA-z 0-9]*$/", $postCode) ) {
      $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Invalid values used in Post Code. </p>";
      echo $ErrMsg;
  } else {
    echo $postCode;
    $postCodeValid = True;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gender = $_POST["gender"];
  if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required!";
  } else {
    $gender = $_POST["gender"];
    $genderValid = True;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ext = explode(".", $_POST["file"]);
  if (empty($_POST["file"])) {
    $fileErr = "* CV is required!";
  } elseif ($ext[1] == "docx" || $ext[1] == "pdf") {
    echo $file;
    $fileValid = True;
  } else {
    $ErrMsg = "<p style='background-color:rgb(204, 41, 0);color:white;'>Sorry, only .docx and .pdf files are allowed. </p>";
    echo $ErrMsg;
  }
}

$_SESSION['test1'] = "$nameErr";
$_SESSION['test2'] = "$surnameErr";
$_SESSION['test3'] = "$emailErr";
$_SESSION['test4'] = "$confirmEmailErr";
$_SESSION['test5'] = "$addressErr";
$_SESSION['test6'] = "$postCodeErr";
$_SESSION['test7'] = "$genderErr";
$_SESSION['test8'] = "$fileErr";
$_SESSION['test9'] = "$phoneNumber";


?>
