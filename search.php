<?php 

include("dbconnect.php");


$search= $_POST['search'];

if(!empty($search)){
    $query = " SELECT * FROM cars WHERE title LIKE '$search%'";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);

    if(!$result) {
        die('Query Failed' .mysqli_errno($connection));
    }
    if($count <= 0)
    {
        echo "Sorry we don't have that car Available";
    }
    else {

    
    while($row=mysqli_fetch_array($result)) {

        $cars=$row['title'];
        ?>
        <ul class="list-unstyled">
            <?php 
                echo "<li>{$cars} in stock</li>";


            ?>
        </ul>
<?php
    }
}
}





?>