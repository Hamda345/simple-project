<?php
include_once 'header.php';
?>
<section class="signup-form">
<h2>Sign Up</h2>
<div class="signup-form">
<form action="includes/signup.inc.php" method="post">
<input type="text" name="name" placeholder="Full Name...">
<input type="text" name="email" placeholder="E-mail...">
<input type="text" name="Uid" placeholder="Username...">
<input type="password" name="Pwd" placeholder="Password...">
<input type="password" name="Pwdrepeat" placeholder="Repeat Password...">
<button type="submit" name="submit">Sign Up</button>
</form>
</div>
<?php
if (isset($_GET["error"])){
      if($_GET["error"] == "emptyinput"){
          echo "<p>Fill in the fields!</p>";
      }
      else if($_GET["error"] == "invaliduid"){
        echo "<p>Choose a proper username</p>";  
      }
      else if($_GET["error"] == "invalidemail"){
        echo "<p>Type a valid E-mail</p>";  
      } else if($_GET["error"] == "passworddontmatch"){
        echo "<p>Passwords don't match!</p>";  
      }
      else if($_GET["error"] == "usernametaken"){
        echo "<p>Username already taken!</p>";  
      }
      else if($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong, try again!</p>";  
      }
      else if($_GET["error"] == "none"){
        echo "<p>You have signed up!</p>";  
      }
    }
?>
</section>

<?php
include_once 'footer.php';
?>