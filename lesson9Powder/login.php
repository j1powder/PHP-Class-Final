<?php 
include './templates/header.php';
include 'functions.php';
loginUser();
?>

<main class='main-section'>
<h1>Login</h1>  

<form class='my-form' method="POST" action="login.php">
<label>Login: <input class='form-control' type='email' name='username'></label>
<label>Password: <input class='form-control' type='password' name='password'></label></br>
<button class='btn btn-primary' name='submit'>Submit</button>

</form>

</main>



<?php
include './templates/footer.php';
?>