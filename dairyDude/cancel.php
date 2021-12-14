<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy Dude</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/9a1bef43f6.js" crossorigin="anonymous"></script>

    <!--Custome Styles-->
    <link rel="stylesheet" href="css/structure.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
    <script src="js/main.js"></script>

    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <nav class="navbar container-fluid">
        <div class="row">
            <div class="col-2">

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
                    <a href="index.html">Home</a>
                    <a href="shop.html">Shop</a>
                    <a href="merch.html">Merch</a>
                    <a href="contact.html">Contact</a>
                    <a href="about.html">About</a>
                </div>
                <div class="dropdown">
                    <span onmouseover="openNav()">&#9776;</span>
                </div>

            </div>
            <div class="col-1">
            </div>
            <div class="col-5">
                <h4>Dairy Dude</h4>
            </div>
            <div class="col-2">
                <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                    <input type="image" src="https://www.jmkweb.us/web_hw/wdv351/dairyDude/images/shopping_cart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>
            <div class="col-2">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </nav>

    <header>
        <h1>Sorry to See You Goal</h1>
    </header>



    <article>

    </article>



    <footer>
        <div class="banner">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-4">
                    <h5>Subscribe to our Newsletter to stay up to Date On Our Latest Newest</h5>
                </div>
                <div class="col-5">
                <form action="contact.php" method="POST">
                        <?php
                        $_SESSION['newsletterEmail'] = true;
                        ?>
                        <input type="email" name="newsletter_email" value="" placeholder="Email">
                        <input type="submit" name="newsletter_button" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="row">
                <div class="col-1">

                </div>
                <div class="col-1 logo">
                    <h3>Diary Dude</h3>
                </div>
                <div class="col-1 ">

                </div>
                <div class="col-2 menu">
                    <h3>Menu</h3>
                    <p><a href="index.php">Home</a> </p>
                    <p> <a href="shop.php">Shop</a></p>
                    <p> <a href="merch.php">Merch</a></p>
                    <p> <a href="contact.php">Contact</a></p>
                    <p> <a href="about.php">About</a></p>
                </div>
                <div class="col-2 contactUs">
                    <h3>Contact US</h3>
                    <h4>Address: <span>8 Poplar Ave Egg Harbor Township, New Jersey(NJ), 08234</span></h4>
                    <h4>Phone: <span>(609) 927-4012</span></h4>
                </div>
                <div class="col-1">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-snapchat-ghost"></i>
                </div>
                <div class="col-1">
                    <p>Copyright 2021-All rights Resvered</p>
                </div>
                <div class="col-2">
                    <h3>School Project</h3>
                </div>

                <div class="col-2 ">
                    <p>Copyright <?php echo date("Y") ?>-All rights Resvered</p>
                    <h3>School Project</h3>
                </div>


            </div>


    </footer>



</body>

</html>