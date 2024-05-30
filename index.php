<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Spice Junction</title>

        <link rel="stylesheet" type="text/css" href="Css/main.css" />
        <script src="javascript/slider.js"></script>

    </head>


    <body>

        <div class="container">
            <div class="row">

                <!----------- main area of web site --------------->

                <div class="col12 ">

                    <!------------------ Menu Bar ---------------------->

                    <div class="rowmenu">

                        <?php include "navbar.php" ?>

                    </div>


                    <!------------------- Slider ----------------------->


                    <div class="rowslider">
                        <img src="Images/photo1.jpg" width="100%" height="500px" style="margin-top: 5px;" alt="slider1.jpg"
                            id="slideimage">
                    </div>
                    <br><br>

                    <!-- ---------------------------------------card show---------- -->
                    <?php include "card.php"; ?>


                    <!------------------- Footer ----------------------->

                    <div class="rowfooter">

                        <?php include "footer.php" ?>

                    </div>
                </div>
            </div>
        </div>
    </body>

</html>