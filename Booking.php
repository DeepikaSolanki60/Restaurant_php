<?php include 'connection.php' ?>
<?php
if (isset($_POST['submit_btn'])) {
    $costmer_name = $_POST['Cname'];
    $email = $_POST['email'];
    $select = $_POST['select'];
    $number = $_POST['number'];
    $date = $_POST['Cdate'];
    $time = $_POST['Ctime'];
    $request = $_POST['request'];
    $query = "INSERT INTO booking(Cname,email,tableType,numberOfGuests,Cdate,Ctime) VALUES('$costmer_name','$email','$select','$number','$date','$time ','$request')";

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>

<body>
    <h2>Welcome</h2>
    <from>
        <label>Your Name</label>
        <input type="text" name="Cname" placeholder="Enter your Full name" /><br>
        <label>E-mail</label>
        <input type="email" name="email" placeholder="ex:myname@example.com" /><br>
        <label>Table type</label>
        <select name="select">Please Select
            <option>Standerd Table(1 to 2 people)</option>
            <option>Family Table(1 to 4 people)</option>
            <option>Private Table(1 to 3 people)</option>
            <option>Standerd Table(1 to 2 people)</option>
        </select><br>
        <label>Number of Guests</label>
        <input type="number" placeholder="e.g., 23" name="number" /><br>
        <label>Arrival Date</label>
        <input type="date" name="Cdate" /><br>
        <label>Time</label>
        <input type="time" name="Ctime" /><br>
        <label>Special Request</label>
        <textarea name="request">write there</textarea><br>
        <input type="submit" name="submit_btn" />


    </from>
</body>

</html>