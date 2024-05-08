<?php include 'connection.php'; ?>
<?php
$target_dir = 'uploads/';
$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST['submit_btn'])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $itemName = $_POST['itemName'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  // $file = $_FILES['fileToUpload'];
  $query = "INSERT INTO add_item(itemName,price,quantity,item_photo) VALUES('$itemName','$price',' $quantity','$target_file')";

  $data = mysqli_query($con, $query);
  if ($data) {
    ?>z
    <script type="text/javascript">
      alert("Data saved Successfully ");
      window.open("http://localhost/Restaurant/deshboard.php", "_self");
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


<html>

<head>
  <link rel="stylesheet" type="text/css" href="Css/add_item.css" />
</head>

<body>
  <div class="add-box">
    <form method="post" enctype="multipart/form-data">
      <h1>Add Item</h1>

      <label>Item Name</lebel>
        <input type="text" name="itemName" placeholder="Itemname" id="itemname">

        <label>Price</label>
        <input type="text" name="price" placeholder="Username" id="username">


        <label>Quantity</label>
        <input type="text" name="quantity" placeholder="Username" id="username">



        <span>Item Photo</span>
        <input type="file" name="fileToUpload" required><br>

        <button class="button" type="submit" name="submit_btn">Submit</button>

    </form>
  </div>


</body>

</html>