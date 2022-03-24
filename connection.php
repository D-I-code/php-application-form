<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$confirmEmail = $_POST["confirm"];
$address = $_POST["address"];
$phoneNumber = $_POST['phoneNumber'];
$postCode = $_POST["postcode"];
$gender = $_POST["gender"];
$file = $_POST["file"];
}



  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    // echo $name;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $surname = $_POST['surname'];
  if (empty($surname)) {
    echo "Surname is empty";
  } else {
    // echo $surname;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $email = $_POST['email'];
  if (empty($email)) {
    echo "Email is empty";
  } else {
    // echo $email;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $confirmEmail = $_POST['confirm'];
  if (empty($confirmEmail)) {
    echo "Confirm email is empty";
  } else {
    // echo $confirmEmail;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $address = $_POST['address'];
  if (empty($address)) {
    echo "Address is empty";
  } else {
    // echo $address;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $phoneNumber = $_POST['phoneNumber'];
  if (empty($phoneNumber)) {
    echo "Phone number is empty";
  } else {
    // echo $phoneNumber;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $postCode = $_POST['postcode'];
  if (empty($postCode)) {
    echo "Post code is empty";
  } else {
    // echo $postCode;
  }
}



  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "root";
  $dbName = "applicationform_sql";




	$conn = mysqli_connect(hostname:$host,
                         username:$dbUsername,
                         password:$dbPassword,
                         database:$dbName);


	if(mysqli_connect_errno()){
		die("Connection Failed : ". mysqli_connect_error());
	}
if($nameValid == True && $surnameValid == True && $emailValid == True && $confirmEmailValid == True && $addressValid == True && $phoneNumberValid == True && $postCodeValid == True && $genderValid == True && $fileValid == True){

  $sql = "INSERT INTO applications (name, surname, email, confirm_email, address, phone_number, postcode, gender, file) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);

  if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
  }

  mysqli_stmt_bind_param($stmt, "sssssssss", $name, $surname, $email, $confirmEmail, $address, $phoneNumber, $postCode, $gender, $file);

  mysqli_stmt_execute($stmt);

  echo "<h2 style='background-color:rgb(8, 196, 64);color:white;'>Application submitted.</h2>";
}
?>
