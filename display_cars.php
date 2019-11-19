<?php 
include("dbconnect.php");

$query="SELECT * FROM cars";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Failed".mysqli_error($connection));
}
else
{
   while($row=mysqli_fetch_array($result)) 
   {
       echo "<tr>";
       echo "<td>{$row['id']}</td>";
       echo "<td><a rel='".$row['id']."' href='javascript:void(0)' class='title-link'>{$row['title']}</td>";
       echo "</tr>";
   }
}

?>



<script>
    $(document).ready(function() {

//$("#action-container").hide();
            $(".title-link").on('click', function () {
                $("#action-container").fadeIn();
                var id=$(this).attr("rel");

                $.post("process.php", {id:id}, function(data){

                    $("#action-container").html(data);
                })


                });
    });

</script>