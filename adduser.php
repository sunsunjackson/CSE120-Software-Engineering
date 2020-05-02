<?php  include('header.php'); ?>

<!-- This is the image in the front cover-->
<div class="blueimg">
    <h1 class="top-left">Maia</h1>
    <p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>

<br>

<!-- Fill out the information below when adding a new user. The Add User button transitions to addition.php -->
<form action="addition.php" method="POST">
  <div class="container">
    <h1>Add User</h1>
    <p>Please fill in this form to create an account. (Please input all information in capitalized form)</p>
    <hr>

    <label for="full-name"><b>Full Name</b></label>
    <input type="text" placeholder="ENTER FULL NAME" name="registerName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="ENTER EMAIL" name="registerEmail" required>

    <label for="psw-repeat"><b>Repeat Email</b></label>
    <input type="text" placeholder="REPEAT EMAIL" name="repeatEmail" required>

    <!-- Choose user type -->
    <label for="user-type"><b>User type</b></label>
    <input type="text" placeholder="USER or ADMIN" name="registerType" required>
    <hr>

    <button type="submit" class="registerbtn">Add User</button>
  </div>

</form>

<!-- We will need disconnect.php to disconnect from the database -->
<?php  include('disconnect.php'); ?>
