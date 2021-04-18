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
</section>



<?php
include_once 'footer.php';
?>