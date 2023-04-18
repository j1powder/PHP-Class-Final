<?php 
include './templates/header.php';
include 'functions.php';
createUser();

?>

<main class='main-section'>
  <h1>Registration Form</h1>  
<form class='my-form' method='post' action='register.php'>
<label>First Name: <input class='form-control' type='text' name='firstname'></label>
<label>Last Name: <input class='form-control' type='text' name='lastname'></label>
<label>Email Address: <input class='form-control' type='email' name=email></label>
<label>Password: <input class='form-control' type='text' name='password1'></label>
<label>Confirm Password: <input class='form-control' type='password' name='password2'></label>
</br>
<button type='submit' name='submit' class='btn btn-primary'>Register</button>

</form>

</main>



<?php
include './templates/footer.php';
?>