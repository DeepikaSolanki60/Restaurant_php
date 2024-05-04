<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
                    *{
                       margin: 0;
                       padding: 0;
                       box-sizing: border-box;
                   }

                   body{
                       background: #fcfcfc;
                       font-family: sans-serif;
                   }
                               footer{
                       position: relative;
                       bottom: 0;
                       left: 0;
                       right: 0;
                       background: #111;
                       height: auto;
                       width: 98.5vw;
                       padding-top: 40px;
                       color: #fff;
                   }
                   .footer-content{
                       display: flex;
                       align-items: center;
                       justify-content: center;
                       flex-direction: column;
                       text-align: center;
                   }
                   .footer-content h3{
                       font-size: 2.1rem;
                       font-weight: 500;
                       text-transform: capitalize;
                       line-height: 3rem;
                   }
                   .footer-content p{
                       max-width: 500px;
                       margin: 10px auto;
                       line-height: 28px;
                       font-size: 14px;
                       color: #cacdd2;
                   }
                   .socials{
                       list-style: none;
                       display: flex;
                       align-items: center;
                       justify-content: center;
                       margin: 1rem 0 3rem 0;
                   }

                   .socials li{
                       margin: 0 10px;
                   }

                   .socials a{
                       text-decoration: none;
                       color: #fff;
                       border: 1.1px solid white;
                       padding: 5px;
                       border-radius: 50%;
                   }

                   .socials a i{
                       font-size: 1.1rem;
                       width: 20px;
                       transition: color .4s ease;
                   }

                   .socials a:hover i{
                       color: aqua;
                   }
                   .footer-bottom p{
                      float: left;
                      font-size: 14px;
                      word-spacing: 2px;
                      text-transform: capitalize;
                   }
                   .footer-bottom p a{
                     color:#44bae8;
                     font-size: 16px;
                     text-decoration: none;
                   }
                   .footer-bottom span{
                       text-transform: uppercase;
                       opacity: .4;
                       font-weight: 200;
                   }
                   @media (max-width:500px) {
                   .footer-menu ul{
                     display: flex;
                     margin-top: 10px;
                     margin-bottom: 20px;
                   }
                   }
        </style>        
    </head>
    <body>
        <footer>
        <div class="footer-content">
            <h3>Our Restaurant</h3>
            <p> The need for food is universal, but access to food for all those who need it is not </p>
             <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
             </ul>
            <p >reserved by  <a href="index.php" >restaurant</a>  </p>
        </div>
        </footer>
    </body>
</html>