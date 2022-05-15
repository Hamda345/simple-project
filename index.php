<?php
require_once "header.php";
?>
<?php
include_once 'includes/dbh.inc.php';
$result = mysqli_query($conn,"SELECT * FROM cars");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
    <tr>
        <td>Brand</td>
        <td>Price</td>
        <td>Number of doors</td>
        <td>Number of seats</td>
        <td>Fuelt type</td>
    </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["carsBrand"]; ?></td>
    <td><?php echo $row["carsPrice"]; ?></td>
    <td><?php echo $row["carsDoors"]; ?></td>
    <td><?php echo $row["carsSeats"]; ?></td>
    <td><?php echo $row["carsFueltype"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<?php
require_once "footer.php";
?>
