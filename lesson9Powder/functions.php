
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
        }
    
        if ($_POST['password1'] != $_POST['password2']) {
            $problem = true;
            print '<p class="text--error">Your password did not match your confirmed password!</p>';
        }
        if (!$problem) { // If there weren't any problems...
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password1 = $_POST['password1']; 
            $password2 = $_POST['password2'];
        
            setcookie('email', $email);
            setcookie('password2', $password2);
            // Print a message:
            print '<p class="text--success">You are now registered!<br>Okay, you are not really registered but...</p>';
    
            // Clear the posted values:
            $_POST = [];
        
        } else { // Forgot a field.
        
            print '<p class="text--error">Please try again!</p>';
            
        } 

 }
}





?>