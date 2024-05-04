<?php include 'connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM add_item WHERE id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
if (isset($_POST['update_btn'])) {

    $itemName = $_POST['itemName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $item_photo = $_POST['item_photo'];
    $update = "UPDATE  add_item SET itemName='$itemName',price='$price',quantity='$quantity',item_photo='$item_photo' WHERE id='$id'";
    $data = mysqli_query($con, $update);
    if ($data) {
        ?>
        <script>
            alert("Data update Successfilly ");
            window.open("http://localhost/Restaurant/show_item.php", "_self");
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            echo "please try again ";
        </script>
        <?php
    }
}

?>
<div>
    <form action="" method="POST">
        <input value="<?php echo $row['itemName'] ?>" type="text" name="itemName"
           /><br><br>
        <input value="<?php echo $row['price'] ?>" type="text" name="price"
            /><br><br>
        <input value="<?php echo $row['quantity'] ?>" type="teaxt" name="quantity"/><br><br>
        <input value="<?php echo $row['item_photo'] ?>" type="teaxt" name="item_photo"/><br><br>
        <input type="submit" name="update_btn" value="update" />
        <button><a href="show_item.php">Back</a></button>
    </form>
</div>