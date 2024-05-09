<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="Css/booking.css" />
</head>

<body>
  <div>
    <h3>REGISTRATION</h3>
    <div class="Main_container">
      <!------------------------ form form custmer ---------------------->
      <form action="booking.php" method="Post">
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
          <input type="time" name="arrivaltime" />
          <label>
            <button type="submit" name="save_btn">Submit</button><br>
          </label>

        </div>
      </form>
    </div>
</body>

</html>