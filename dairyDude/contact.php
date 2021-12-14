

<?php 
session_start();

$emailSent = "";

if(isset( $_GET['email'])){
    $emailSent = $_GET['email'];
}

if($emailSent == "yes"){

    $to = $_POST['newsletter_email'];
    $subject = "Feeback Recieved";
    $message = "Thanks for signing up for the newsletter, we will contact you soon!";
    $headers = "From: support@jmkweb.us" . "\r\n" ;

    // Always set content-type when sending HTML email
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if (mail($to,$subject,$message,$headers) ){?>
     <script>
            alert("Thanks for signing up for the newsletter")
            unset($_GET['email'])
            window.location.href = 'contact.php';
    </script>
    <?php
    }else{
        ?>
        <script>
            alert("Please Try Again")
            unset($_GET['email']);
            window.location.href = 'index.php';
            
        </script>
        <?php
    }
}

if(isset($_POST['submit'])){ ?>
    <script>
        let getInput = document.querySelector("#home_address").value
        if(getInput == ""){

        }else{
            alert("Please Try Again")
            window.location.href = 'contact.php';
        }
    </script>

<?php
 
 $firstName = $_POST['first_name'];
 $lastName = $_POST['last_name'];
 $guestEmail = $_POST['email'];
 $phoneNumber = $_POST['phone_number'];
 $issueListed = $_POST['issue_listed'];
 $guestMessage = $_POST['guest_comment'];
 $contactPoint = $_POST['contact_point'];

 //getting the current date
    $newDate = date_create();
    $currentDate = date_format($newDate, "m/d/Y");

    $to = $guestEmail;
    $subject = "Feeback Recieved";
    $message = "
    <html>
    <head>
    <title>Feedback</title>
    </head>
    <body>
        <div class='emailBlock'>
            <h1  style=' color: #4fb4d2; margin-top: 2em; margin-bottom: 2em;  text-align: center;'>Thanks For the feedback</h1>
            <h3 style='margin-bottom: 3em;  text-align: center;'>$lastName, $firstName</h3>
            <h3 style='margin-bottom: 3em;  text-align: center;'>Date Recieved: $currentDate </h3>
            <h3 style='margin-bottom: 3em;  text-align: center;'>Your Email: $guestEmail </h3>
            <h3 style='margin-bottom: 3em;  text-align: center;'>PhoneNumber: $phoneNumber</h3>
            <h3 style='margin-bottom: 3em;  text-align: center;'>The Issue: $issueListed </h3>
            <h3 style='margin-bottom: 3em;  text-align: center;'>Point of Contact:  $contactPoint </h3>
            <h3 style='margin-bottom: 3em;  text-align: center;'>Your Message:  $guestMessage </h3>
            <h4 style='margin-bottom: 3em;  text-align: center; color: #7966a2;'>Please email us for any farther questions</h4>
        </div>


    </body>
    </html>
    ";


    $headers = "From: support@jmkweb.us" . "\r\n" ;

    // Always set content-type when sending HTML email
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    function clientMessage($first, $last, $guest,$phone, $issue, $contact, $Message,$Date){
        $to="support@jmkweb.us";
        $subject = "customer Feeback";
        $message = "
            <html>
            <head>
            <title>Feedback</title>
            </head>
            <body>
                <div class='emailBlock'>
                    <h1 style=' color: #4fb4d2; margin-top: 2em; margin-bottom: 2em;  text-align: center;'>Guest Feedback</h1>
                    <h3 style='margin-bottom: 3em;  text-align: center;'>$last, $first</h3>
                    <h3 style='margin-bottom: 3em;  text-align: center;'>Date Recieved: $Date </h3>
                    <h3 style='margin-bottom: 3em;  text-align: center;'>Their Email: $guest </h3>
                    <h3 style='margin-bottom: 3em;  text-align: center;'>Their PhoneNumber: $phone</h3>
                    <h3 style='margin-bottom: 3em;  text-align: center;'>Their Issue:  $issue</h3>
                    <h3 style='margin-bottom: 3em;  text-align: center;'>Point of Contact: $contact </h3>
                    <h3 style='margin-bottom: 3em;  text-align: center;'>Their Message:  $Message </h3>
                    <h4 style='margin-bottom: 3em;  text-align: center; color: #7966a2;'>Please respond 24-48 hours</h4>
                </div>

            </body>
            </html>
            ";
        $headers = "From: support@jmkweb.us" . "\r\n" ;
        // Always set content-type when sending HTML email
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    
    
    if (mail($to,$subject,$message,$headers) ){ ?>
            <script>
            alert("Thank you for the message. We will contact you shortly")
            window.location.href = 'index.php';
        </script>
         <?php
            }
            ?>
            <?php
        }

    
        if (mail($to,$subject,$message,$headers) ){
    $_SESSION['emailSent'] = true;
    clientMessage($firstName, $lastName, $guestEmail,$phoneNumber, $issueListed, $contactPoint, $guestMessage,$currentDate);
        
    }
    else{?>
      <script>
            alert("Email failed. Please send an email to support@jmkweb.us or try again later ")
            window.location.href = 'contact.php';
        </script>
    <?php
    }
}
else{
   
?>

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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/main.js"></script>

   

</head>

<body>


    <nav class="navbar container-fluid">
        <div class="row">
            <div class="col-2">

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
                    <a href="index.php">Home</a>
                    <a href="shop.php">Shop</a>
                    <a href="merch.php">Merch</a>
                    <a href="contact.php">Contact</a>
                    <a href="about.php">About</a>
                    <a href="login.php">Login</a>

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
                <a href="login.php"><i class="fas fa-user"> </i></a>
            </div>
        </div>
    </nav>

    <header>
        <img src="images/contact/melting_icecream.png" alt="Melting IceCream">
        <h1>Contact Us</h1>
    </header>

    <section>
        <div class="form-div">
            <div class="circle">
                <img src="images/contact/email_icon.png" alt="Email Icon">
            </div>
            <div>
                <form class="was-validated" action="contact.php" method="post">
                    <p>
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </p>
                    <p>
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </p>
                    <p class="home_address">
                        <label for="home_address" class="form-label">Home Address:</label>
                        <input type="text" name="home_address" id="home_address" class="form-control" placeholder="Home Address" value="">
                        
                    </p>
                    <p>
                        <label for="email_listed" class="form-label">Email: </label>
                        <input type="Email" class="form-control" id="email" placeholder="Enter email" name="email" value="" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>

                    </p>
                    <p class="">
                        <label for="phone_number" class="form-label">Phone Number:</label>
                        <input type="tel" name="phone_number" id="phone_number" class="form-control" value="" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="000-000-0000" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </p>
                    <p>
                        <label for="issue_listed">Issue?</label>
                        <select name="issue_listed" id="issue_listed" class="form-select" required>
                            <option value="">Please Select an Option</option>
                            <option value="">Wrong Purchase</option>
                            <option value="">Shipping</option>
                            <option value="">MisConduct</option>
                            <option value="">General</option>
                        </select>

                    </p>
                    <p>
                        <label for="contact_point">Point of Contact</label>
                        <select name="contact_point" id="contact_point" class="form-select" required>
                            <option value="">Contact Preference</option>
                            <option value="">Email</option>
                            <option value="">Phone</option>
                            <option value="">In Store</option>
                        </select>
                    </p>
                    <p>
                        <label for="guest_comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment" name="guest_comment"></textarea>
                    </p>

                    <p>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </p>
                </form>
            </div>
        </div>
    </section>

  

   

    
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
<?php 
}
?>