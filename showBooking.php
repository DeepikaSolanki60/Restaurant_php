<?php include ('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show Booking</title>
</head>

<body>
    <h1> bookings </h1>
    <div>
        <table border="1px" cellpadding="10px" cellspacing="0">
            <tbody>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Mobail Number</th>
                <th>Table Details</th>
                <th>Date</th>
                <th>Time</th>
                <th>Cencel</th>
                
            </tr>
           
            <?php
$query = "SELECT * FROM booking";
$data = mysqli_query($con, $query);
$result = mysqli_num_rows($data);
if ($result) {
    while (($row = mysqli_fetch_array($data))) {
        ?>
        
                <tr>
                    <td><?php echo $row['customerName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['cnumber']; ?></td>
                    <td><?php echo $row['tableType']; ?></td>
                    <td><?php echo $row['arrivalDate']; ?></td>
                    <td><?php echo $row['arrivaltime']; ?></td>
                    <td><input type="checkbox"></td>
                    </tr>
                </tr>
            </tbody>
        <?php
    }
} 
else {
    ?>
    <tr>
        <td>No record Found</td>
    </tr>
    <?php
}
?>

        </table>
    </div>
</body>

</html>