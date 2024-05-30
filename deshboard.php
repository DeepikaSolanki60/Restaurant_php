<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="Css/navbar2.css"> -->
    <style>
        .desh1 {
            background-color: white;
            width: 25%;
            margin: 5px;
            border: 2px solid red;
        }

        .desh2 {
            background-color: wheat;
            width: 75%;
            margin: 5px;
            border: 2px solid red;

            .dropdown {
                float: left;
                overflow: hidden;
            }
        }
    </style>
</head>

<body>
    <div style="display:flex; width:100%; height:666px; ">
        <div class="desh1">
            <ul>

                <h1>Restoran</h1>

                <a href="#">
                    <li onclick="loadPage('home.php')">Home</li>
                </a><br>
                <div>
                    <a href="#">
                        <li onclick="loadPage('Booking.php')">Booking</li>
                    </a><br>
                    <a href="#">
                        <li onclick="loadPage('showBooking.php')">Show Booking</li>
                    </a><br>
                    <a href="#">
                        <li onclick="loadPage('Gallery.php')">Gallery</li>
                    </a><br>
                </div>
                <div class="dropdown">
                    <a href="#">
                        <button class="dropbtn">
                            <li>Item</li>
                        </button></a><br>
                    <div class="dropdown-content">
                        <a href="#"><li onclick="loadPage('add_item.php')">Add Item</li></a>
                        <a href="#"><li onclick="loadPage('show_item.php')">Show Item</li></a>

                    </div>
               <div><br>
                <a href="index.php">
                    <li onclick="checkdelete('index.php')">log out</li>
                </a>


            </ul>
        </div>

        <div class="desh2">
            <iframe id="iframe-content" width="100%" height="500px" frameborder="0"></iframe>
        </div>
        <script>
            function loadPage(url) {
                const iframe = document.getElementById("iframe-content");
                iframe.src = url;
            }
            function checkdelete() {
                return confirm('Are you sure you want to logout ??');
            }


        </script>
    </div>
</body>

</html>