<?php  include('header.php'); ?>

<!-- This is the image in the front cover-->
<div class="blurbackground">
  <h1 class="top-left" style="color: white">Maia</h1>
  <p1 class="top-left2" style="color: white">Best Practice, Most Efficient</p1>
  <p1 class="top-right" style="color: white">&copy; <?php echo date('Y'); ?> Cornucopia</p1>
</div>

<!-- Asking the new User to enter the information in order to add new user into the database. Has to be ALL CAPS -->
<br>
<form action="register.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account. (Please input all information in capitalized form)</p>
    <hr>

    <label for="full-name"><b>Full Name</b></label>
    <input type="text" placeholder="ENTER FULL NAME" name="registerName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="ENTER EMAIL" name="registerEmail" required>

    <!-- option to implement password in the future -->
    <!-- <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="registerPin" required> -->

    <label for="psw-repeat"><b>Repeat Email</b></label>
    <input type="text" placeholder="REPEAT EMAIL" name="repeatEmail" required>

    <!-- Choose user type -->
    <label for="user-type"><b>User type</b></label>
    <input type="text" placeholder="USER or ADMIN" name="registerType" required>
    <hr>

    <!-- Toggle option for choosing user type, keep this -->
    <!-- <div class="custom-control custom-radio">
      <input type="radio" id="customRadio1" name="typeUser" class="custom-control-input">
      <label class="custom-control-label" for="customRadio1">I am a regular user</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="customRadio2" name="typeAdmin" class="custom-control-input">
      <label class="custom-control-label" for="customRadio2">I am an administrator</label>
    </div> -->

    <!-- Terms and Privacy message, doesn't actually have anything -->
    <p style="padding-top: 30px">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <!-- Submit button, takes to register.php -->
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <!-- Option to sign in in case the user already has an account -->
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
</form>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>