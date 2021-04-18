<?php
include_once 'header.php';
?>
<section class="signup-form">
<h2>Login</h2>
<div class="signup-form">
<form action="includes/login.inc.php" method="post">
<input type="text" name="uid" placeholder="Username/E-mail...">
<input type="password" name="Pwd" placeholder="Password...">
<button type="submit" name="submit">Login</button>
</form>
</div>
</section>



<?php
include_once 'footer.php';
?>