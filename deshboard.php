<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/deshboard.css">

</head>

<body>
    <div style="display:flex; width:100%; height:685px; ">
        <div class="desh1">
            <ul>
                <li onclick="loadPage('home.php')">Home</li>

                <li onclick="loadPage('Booking.php')">Booking</li>

                <li onclick="loadPage('showBooking.php')">Show Booking</li>

                <li onclick="loadPage('Gallery.php')">Gallery</li>

                <li onclick="loadPage('bill.php')">Bill</li>
                <li>Item

                    <div class="dropdown">
                        <ul>
                            <li onclick="loadPage('add_item.php')">Add Item</li>

                            <li onclick="loadPage('show_item.php')">Show Item</li>

                        </ul>
                    </div>
                </li>
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