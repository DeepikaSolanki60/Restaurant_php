<?php include 'connection.php';
    $id=$_GET['id'];
    $query="DELETE FROM add_item WHERE id='$id'";
    $data=mysqli_query($con,$query);
    if($data){
        ?>
        <script>
            alert("Data deleted Successfully");
            window.open("http://localhost/Restaurant/show_item.php","_self");
        </script>
     <?php
    }
    else{
        ?>
        <script>
            alert("Please try again");
        </script>
        <?php
    }
    
?>