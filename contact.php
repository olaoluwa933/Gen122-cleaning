<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen 122 - Cleaning</title>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

    <body>
        <div id="navigation" class="navigation">
            <div class="top-bar">
                <div class="button-area">
                    <a href="https://www.gov.uk/government/publications/covid-19-decontamination-in-non-healthcare-settings/covid-19-decontamination-in-non-healthcare-settings" class="button">Government Cleaning Guidelines</a>
                </div>
                <div class="social-icons">
                    <a href="" class="icon">
                        <img src="images/icons/LinkedIn.png" alt="LinkedIn Icon">
                    </a>

                    <a href="" class="icon">
                        <img src="images/icons/Facebook.png" alt="Facebook Icon">
                    </a>

                    <a href="" class="icon">
                        <img src="images/icons/Twitter.png" alt="Twitter Icon">
                    </a>
                </div>
                <div class="hours">
                    <p>Working Hour: Mon - Fri (9:30am - 5pm)</p>
                </div>
            </div>
            <div class="nav">
                <div class="logo-container">
                    <a href="index"><img src="images/logo.png" alt="Logo Image"></a>
                </div>
                <di id="menuToggle" class="menu">
                    <input type="checkbox">
                    <div class="ham">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                    </div>
                    <ul id="menu" class="navbar">
                        <li class="nav-item"><a href="index">Home</a></li>
                        <li class="nav-item"><a href="services#commercial-cleaning">Commercial Cleaning</a></li>
                        <li class="nav-item"><a href="services#end-ten-cleaning">Ending of Tendency Cleaning</a></li>
                        <li class="nav-item"><a href="services#airbnb-cleaning">Airbnb Cleaning</a></li>
                        <li class="nav-item"><a href="services#carpet-cleaning">Carpet Cleaning</a></li>
                        <a href="contact" class="cta btn">Contact Us</a>
                    </ul>
                </div>
            </div>
        </div>

        <style>
            .trail{
                background: url('images/contact-bg.png'), rgba(0, 0, 0, 0.46);
            }
        </style>

        <?php if(isset($_GET['error'])){
            $error = $_GET['error']; ?>
            <div onclick="closeAlert();" id="alert" class="alert">
            <div class="container">
                <div onclick="document.getElementById('alert').style.display = 'none';" class="close"><ion-icon name="close-outline"></ion-icon></div>
                <p><?php echo $error; ?></p>
            </div>
            </div>
        <?php }
        if(isset($_GET['success'])){
            $success = $_GET['success']; ?>
            <div onclick="closeAlert();" id="alert" class="alert">
            <div class="container">
                <div onclick="document.getElementById('alert').style.display = 'none';" class="close"><ion-icon name="close-outline"></ion-icon></div>
                <p><?php echo $success; ?></p>
            </div>
            </div> <?php
        }
        ?>
        <script>
            function closeAlert(){
                document.getElementById('alert').style.display = 'none';
            }
        </script>
        
        <div class="trail">
            <h3 class="page-heading">
                CONTACT
            </h3>
            <p class="ttt">
                <a href="index">Home</a> >> Services
            </p>
        </div>

        <div class="contact-container section">
            <h3 style="text-align: center; text-transform: uppercase;" class="heading">
                Service Booking
            </h3>
            <form action="contact-act.php" method="post">
                <div class="contact-info">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <input type="text" name="com-name" id="com-name" placeholder="Company Name">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="tel" name="tel-num" id="tel-num" placeholder="Contact Number">
                </div>

                <h3 style="margin-top: 40px; color: #358067;" class="heading">
                    Select the option(s) below
                </h3>
                <div class="contact-check">
                    <div class="check-group">
                        <label class="check-item">Offices
                            <input type="checkbox" value="Offices" name="option[]" id="offices">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-item">Hospital
                            <input type="checkbox" value="Hospital" name="option[]" id="hospital">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-item">Restaurants/Pubs
                            <input type="checkbox" value="Restaurants/Pubs" name="option[]" id="Restaurants/Pubs">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-item">Church/Synagogue/Mosque
                            <input type="checkbox" value="Church/Synagogue/Mosque" name="option[]" id="Church/Synagogue/Mosque">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="check-group">
                        <label class="check-item">Schools
                            <input type="checkbox" value="Schools" name="option[]" id="schools">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-item">Residential Buildings
                            <input type="checkbox" value="Residential Buildings" name="option[]" id="Residential Buildings">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-item">End of Tenancy Cleaning
                            <input type="checkbox" value="End of Tenancy Cleaning" name="option[]" id="End of Tenancy Cleaning">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="check-group">
                        <label class="check-item">Carpet Cleaning
                            <input type="checkbox" value="Carpet Cleaning" name="option[]" id="Carpet Cleaning">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-item">Airbnb Cleaning
                            <input type="checkbox" value="Airbnb Cleaning" name="option[]" id="Airbnb Cleaning">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-item">Shops/Department Stores
                            <input type="checkbox" value="Shops/Department Stores" name="option[]" id="Shops/Department Stores">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="other-specs">
                    <h3 style="margin-top: 40px; margin-bottom: 40px; font-size: 20px; color: #358067;">Other Specifications:</h3>
                    <textarea style="background-color: transparent;" name="specs" id="" rows="10"></textarea>
                </div>
                <div class="buttoss">
                    <button type="submit" name="application" class="btn">SUBMIT</button>
                </div>

            </form>
            <img class="rando" src="images/contact-img.png" alt="">
        </div>

        <div id="cont-fot" class="contact-footer">
            <div class="contact-form section">
                <h3 class="heading">
                    Out of hours? <span>Request a call back</span>
                </h3>
                <form action="contact-act.php" method="post">
                    <input type="text" name="cname" id="name" placeholder="Name">
                    <input type="text" name="ccom-name" id="com-name" placeholder="Company Name">
                    <input type="email" name="cemail" id="email" placeholder="Email">
                    <input type="tel" name="ctel-num" id="tel-num" placeholder="Contact Number">
                    <button type="submit" name="contact" class="btn">REQUEST</button>
                </form>
            </div>
            <div class="contact-form section">
                <h3 class="heading">
                    Operating Hours
                </h3>
                <div style="margin-bottom: 40px;" class="sect">
                    <p>Mon-Fri: 9:30am - 5pm</p>
                    <p>Weekends: Closed</p>
                </div>

                <div style="margin-bottom: 40px;" class="sect">
                    <h3 style="margin-bottom: 20px;">Contact Us!</h3>
                    <a href="tel:0207-1937-091">0207 1937 091</a>
                    <p>Out of Hours - <a href="tel:0795-0780-359">0795 0780 359</a></p>
                </div>

                <div style="margin-bottom: 40px;" class="sect">
                    <h3 style="margin-bottom: 20px;">Need Support</h3>
                    <a href="mailto:info@gen122.com">info@gen122.com</a>
                </div>
            </div>
        </div>

        <div class="footer section">
            <div class="copyright">
                <p>COPYRIGHT © ALL RIGHTS RESERVED 2021</p>
            </div>
            <div class="social-icons">
                <a href="">
                    <img src="images/footer/Linkedin.png" alt="LinkedIn Icon">
                </a>
                <a href="">
                    <img src="images/footer/instagram.png" alt="instagram Icon">
                </a>
                <a href="">
                    <img src="images/footer/facebook.png" alt="Facebook Icon">
                </a>
            </div>
            <div class="contact">
                <p> Contact Us: <a href="tel:+0207 1937 091">0207 1937 091</a>
                    Out of hours: <a href="tel:+0795 0780 359">0795 0780 359</a>
                   </p>
            </div>
        </div>
    <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/inView.jquery.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>