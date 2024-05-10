<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Item</title>
</head>

<body>
    <h2>Item</h2>
    <table border="1px" cellpadding="10px" cellspacing="0">
        <tbody>
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
               $query="SELECT * FROM add_item";
               $data=mysqli_query($con,$query);
               $result=mysqli_num_rows($data);
               if($result)
               {
                while(($row=mysqli_fetch_array($data)))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['itemName']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><img src="<?php echo $row['item_photo'];?>"width="100" height="50"></td>
                     <td><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
                       <td><a onclick="return confirm('Are you sure')" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td> 
                    </tr>
                    <?php
                }
            }
              else{
                ?>
                <tr>
                    <td>No record Found</tb>
                </tr>
                <?php
              }
            ?>
               

            

        </tbody>
    </table>
</body>

</html>