<?php 

include("dbconnect.php");

if(isset($_POST['car_name']))
{

$query = "INSERT INTO cars (title) VALUES ('{$_POST['car_name']}')";
$result=mysqli_query($connection,$query);
if($result)
{
    echo "Data Inserted Successflly";
}
else
{
    die(mysqli_error($connection));
}


}

?>