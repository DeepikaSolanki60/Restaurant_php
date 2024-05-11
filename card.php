<?php include 'connection.php'; ?>
<?php
    $query = "SELECT * FROM  add_item";
    $all_product = $con->query($query);
?>
<!-------------------------------htmln start-------------------------------------------------->
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/card.css" />
    <title>crad</title>
</head>
<body>
    <!----------------------------------------main contener start ---------------->
    <main>
        <!-------------------------adding php-------------------------------------->
        <?php
        while ($row = mysqli_fetch_assoc($all_product)) 
        {
            ?>
            <div class="card">
                <div class="card_image">
                    <img src="<?php echo $row['item_photo'] ?>" />
                </div>

                <div class="card_title">
                    <h1><?php echo $row['itemName']; ?></h1>
                    <p><?php echo $row['price']; ?></p>
                </div>
                <div class="card_des">
                    <button>read More</button>
                </div>
            </div>
            <?php
        }
        ?>
    </main>
</body>

</html>