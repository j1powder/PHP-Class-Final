
<?php 

function createUser() {
    if(isset($_POST['submit'])) {
        echo 'getting data';
        $problem = false;
         if (empty($_POST['firstname'])) {
            $problem = true;
            print '<p class="text--error">Please enter your first name!</p>';
        }
        
        if (empty($_POST['lastname'])) {
            $problem = true;
            print '<p class="text--error">Please enter your last name!</p>';
        }
    
        if (empty($_POST['email'])) {
            $problem = true;
            print '<p class="text--error">Please enter your email address!</p>';
        }
    
        if (empty($_POST['password1'])) {
            $problem = true;
            print '<p class="text--error">Please enter a password!</p>';
        } else if ($_POST['password1'] != $_POST['password2']){
            $problem = true;
            print '<p class="text--error">Your password did not match your confirmed password!</p>';
        }
    
 

        


        if (!$problem) { // If there weren't any problems...
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password1 = $_POST['password1']; 
            $password2 = $_POST['password2'];
            
            $exp = time() + (60*60*24*7);
            setcookie('email', $email, $exp);
            setcookie('password2', $password2, $exp);
            // Print a message:
            print '<p class="text--success">Your UserName is : ' . $email . ' <br> Your password is:' . $password2 . ' <br> <span style="text-align: center; font-size: 25px;">please navigate to the login page and sign in.</span></p>';
    
            // Clear the posted values:
            //$_POST = [];
        
        } else { // Forgot a field.
        
            print '<p class="text--error">Please try again!</p>';
            
        } 

 }
}

?>
<?php

function loginUser() {
    session_start();
    if(isset($_POST['submit'])) {
    global $connection;
    $problem = false;
    if(empty($_POST['username'])){
        $problem = true;
        print '<p class="text--error">Please enter your username</p>';
    }

    if(empty($_POST['password'])){
        $problem = true;
        print '<p class="text--error">Please enter your password</p>';
    }

    if(!$problem){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
      
      $cookie_email = $_COOKIE['email'];
      $cookie_pass = $_COOKIE['password2']; 
         
        
         if($username !== $cookie_email && $password !== $cookie_pass){
          header("Location: login.php");
           
         } else if($username == $cookie_email && $password == $cookie_pass){
          header("Location: welcome.php");
        
         }
    }

  }

}



?>