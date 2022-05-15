<?php
require_once "header.php";
include_once 'includes/dbh.inc.php';
?>
<section class="signup-form">
    <form action="FindCars.php" method="get">
        <div class="box" align="center" style="margin-top:50px;">
            <div class="container-1">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Search..." name ="search" style="padding: 10px; border-style: solid;
                    border-width: 1px; border-color: #49F477; width:80%;"/>
                <button type="submit" name="submit3" style="width:30%;">Search</button>
            </div>
        </div>
    </form>
</section>
<?php
$search = $_GET["search"];
$search = htmlspecialchars($search); 
$result = mysqli_query($conn, "SELECT * FROM cars
WHERE (`carsBrand` LIKE '%".$search."%') OR (`carsPrice` LIKE '%".$search."%')"); 
if(mysqli_num_rows($result) > 0){
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
		
	
?>
<?php
require_once "footer.php";
?>
