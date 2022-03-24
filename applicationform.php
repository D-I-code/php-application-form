

<?php
include 'error.php';
include 'connection.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Contact form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color:rgb(207, 207, 207);">
  <img src="images/Screenshot1.jpg" class="img-fluid" alt="Responsive image" style="width:2000px;height:120px;">
<div class="container">
  <div class="row g-1">
    <div class="col-md-2">
    </div>
      <div class="col-7">
        <div class="container-fluid">
          <main>
          <div class="col-md-8 offset-md-3">
        <br>
        <style>
         {
          font-family: Georgia, serif;
        }
        </style>
        <h2 class="mb-2">
          <i>Application form</i>
        </h2>
        <br>
      </div>
      <form class="application-form" method="POST" action="applicationform.php ">
          <div class="row g-2">
            <div class="col-md-6">
              <label for="inputName" class="form-label">Name:</label>
          <input autocomplete="given-name" class="form-control" id="inputName" type="text" name="name" placeholder="Enter name" size="50" >
            <span class="error"><?php echo $_SESSION['test1'];?></span>
        </div>
        <div class="col-md-6">
          <label for="inputSurname" class="form-label">Surname:</label>
          <input autocomplete="family-name" class="form-control" ud="inputSurname" type="text" name="surname" placeholder="Enter Surname" size="50" >
          <span class="error"><?php echo $_SESSION['test2'];?></span>
        </div>
      </div>
          <div class="row g-3">
        <div class="col-md-6">
          <br>
          <label for="inputMail" class="form-label">E-mail:</label>
          <input autocomplete="on" class="form-control"  type="text" name="email" placeholder="Enter e-mail" size="50" >
          <span class="error"><?php echo $_SESSION['test3'];?></span>
        </div>
        <div class="col-md-6">
          <br>
          <label for="inputMail" class="form-label">Confirm e-mail:</label>
          <input autocomplete="on" class="form-control"  type="text" name="confirm" placeholder="Confirm e-mail" size="50" >
          <span class="error"><?php echo $_SESSION['test4'];?></span>
        </div>
      </div>
        <div>
          <br>
          <label for="inputPhone" class="form-label">Phone Number:</label>
          <input autocomplete="on" class="form-control"  type="text" name="phoneNumber" placeholder="Enter phone number" size="50">
          <span class="error"><?php echo $_SESSION['test9'];?></span>

        </div>
        <div>
          <br>
          <label for="inputAddress" class="form-label">Address:</label>
          <input autocomplete="on" class="form-control"  type="text" name="address" placeholder="Enter your address" size="50">
          <span class="error"><?php echo $_SESSION['test5'];?></span>
        </div>
        <div>
          <div class="row">
            <div class="col">
          <br>
          <label for="inputPostcode" class="form-label">Post Code:</label>
          <input autocomplete="on" class="form-control"  type="text" name="postcode" placeholder="Enter postcode" size="50">
          <span class="error"><?php echo $_SESSION['test6'];?></span>
        </div>
          <div class="col">
            <br>
          <label for="selectGender" class="form-label">Gender</label>
          <select id="selectGender" class="form-control" name="gender" aria-label="Default select example" >
            <option selected hidden value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
          <span class="error"><?php echo $_SESSION['test7'];?></span>
        </div>
        </div>
      </div>
        <div>
          <br>
          <label for="formFileLg" class="form-label">Upload CV</label>
          <input class="form-control" id="formFileLg" type="file" name="file">
            <span class="error"><?php echo $_SESSION['test8'];?></span>
        </div>
        <div>
          <br>
          <label for="formText" class="form-label">Tell us what makes you suitable for the role:</label>
        <textarea class="form-control" name="message" placeholder="Enter text here..." cols="1"></textarea>
    </div>
    <div>
      <br>
      <div class="col-md-5 offset-md-5">
        <button class="btn btn-success" type="submit" name="submit">SUBMIT</button>
          <p>&nbsp;</p>
        </div>
        </form>
      </div>
    </div>
    <div class="col">
    </div>
  </div>
</div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>
