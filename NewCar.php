<?php
include_once 'header.php';
?>
<section class="signup-form">
<h2>Add new vehicle</h2>
<div class="signup-form">
<form action="includes/NewCar.inc.php" method="post">
<input type="text" name="carBrand" placeholder="Car brand...">
<input type="text" name="carPrice" placeholder="Car price...">
<input type="text" name="carDoors" placeholder="Number of doors...">
<input type="text" name="carSeats" placeholder="Number of seats...">
<input type="text" name="carFueltype" placeholder="Fuel type...">
<button type="submit" name="submit2">Add</button>
</form>
</div>
<?php
include_once "footer.php";
?>