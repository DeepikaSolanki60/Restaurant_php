<?php include 'connection.php';?>
<?php 
if (isset($_POST['Submit'])){
       $firstname=$_POST['firstname'];
       $lastname=$_POST['lastname'];
       $country=$_POST['country'];
       $subject=$_POST['subject'];

$query="INSERT INTO contact_table(firstname,lastname,country,subject) VALUES ( '$firstname','$lastname','$country','$subject')";
$result=mysqli_query($con,$query);
if ($result){
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
<html>
       <head>
       <link rel="stylesheet" type="text/css" href="Css/contact.css"/>
       </head>

       <body>
              <h2>CONTACT US</h2>
              <div class="container">
                     <div style="text-align:center">
                     <h2>CONTACT US</h2>
                     <p> Swing by for a cup of coffee, or leave us a message:</p>
                     </div>

                     <div class="row">
                            <div class="column">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7359.49017203225!2d75.88256768529297!3d22.737714312574806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd5b21e94bb5%3A0x5f1b10962653eb00!2sLIG%20Colony%2C%20Indore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1712837737945!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>

                            <div class="column">

                                   <form action="contact.php" method="POST">

                                          <label for="fname">First Name</label>
                                          <input type="text" id="fname" name="firstname" placeholder="your name..">

                                          <label for="lname">Last Name</label>
                                          <input type="text" id="lname" name="lastname" placeholder="your  last name..">

                                          <label for="country">Country</label>
                                          <select id="country" name="country">

                                          <option value="india">India</option>
                                          <option value="canada">Canada</option>
                                          <option value="usa">USA</option>
                                          </select>

                                          <label for="subject">Subject </label>

                                          <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

                                          <input type="submit" value="submit" name="Submit">

                                   </form>

                                         



                            </div>

                     </div>

              </div>
       </body>


<html>