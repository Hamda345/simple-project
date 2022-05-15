<?php
require_once "header.php";
?>
<?php
include_once 'includes/dbh.inc.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
    <tr>
        <td>Name</td>
        <td>Email id</td>
    </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
    <tr>
        <td><?php echo $row["usersName"]; ?></td>
        <td><?php echo $row["usersEmail"]; ?></td>
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
