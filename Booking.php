<?php include 'connection.php'; ?>
<?php
if (isset($_POST['save_btn'])) {

    $customerName = $_POST['customerName'];
    $email = $_POST['email'];
    $cnumber = $_POST['cnumber'];
    $tableType = $_POST['tableType'];
    $arrivalDate = $_POST['arrivalDate'];
    $arrivaltime= $_POST['arrivaltime'];
    $query = "INSERT INTO booking(customerName,email,cnumber,tableType,arrivalDate,arrivaltime) VALUES('$customerName','$email','$cnumber','$tableType','
            $arrivalDate','')";
    $data = mysqli_query($con, $query);
    if ($data) {
        ?>
        <script type="text/javascript">
            alert("Data saved Successfully ");
           
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/booking.css" />
    <title>Booking</title>
</head>

<body>
    <div>
        
        <div class="Main_container">
            <!------------------------ form form custmer ---------------------->
            <form action="#" method="Post">
                <div class="container">
                    <!-- --------------booking from ---------------->
                    <label>
                        Name:
                        <input type="text" placeholder="Enter you Name" name="customerName" /><br>
                    </label>
                    <label>
                        Email:
                        <input type="email" placeholder="Enter you Email" name="email" /><br />
                    </label>
                    <label>
                        Number:
                        <input type="text" placeholder="Enter you Number" name="cnumber" /><br />
                    </label>
                    <label>
                        table Details:
                        <select name="tableType">
                            <option>two people</option>
                            <option>three people</option>
                            <option>Family </option>
                        </select><br />
                    </label>
                    <label>
                        Date:
                        <input type="date" placeholder="Enter your Date" name="arrivalDate" /><br />
                    </label>
                    <label>
                        Time:
                    </label> 
                    <input type="time" name="arrivaltime"/>
                    <label>
                    <button type="submit" name="save_btn">Submit</button><br>
                    </label>

                </div>
            </form>
        </div>
    </div>
</body>

</html>