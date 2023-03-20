<!DOCTYPE html>
<html lang="en">

    <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>NJ Pizzas • Submitted Data</title>
            <!----------- Styles link ----------->
            <link rel="stylesheet" type="text/css" href="styles.css" />

            <!----------- Icons link ----------->
            <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

            <!----------- Fonts link ----------->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
                rel="stylesheet">
    </head>

    <body>
        <header>
            <a href="#" class="logo">NJ Pizzas</a>
            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </header>

        <main>
            <h2>Order Confirmation Sheet</h2>
            <?php
                $first_name = $_GET['fName'];
                $last_name = $_GET['lName'];
            
                echo('<p>Thank You '.$first_name. ' ' .$last_name.' for taking 
                time to submit your order. We\'ve recieved your order and are currently preparing it.');

                if(isset($_GET['submit'])){

                    if(!empty($_GET['pizza-type'])) {
                
                        foreach($_GET['pizza-type'] as $value){
                            echo ('Pizza\'s ordered : '.$value.'<br/>');
                        }
                
                    }
                
                }
            ?>
        </main>
        <section id="contact">
            <div class="footer">
                <div class="main">
                    <div class="col">
                        <h4>Menu Links</h4>
                        <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Our Services</h4>
                        <ul>
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">Food Delivery</a></li>
                        <li><a href="#">Customization</a></li>
                        <li><a href="#">Fresh food</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Information</h4>
                        <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Follow us on</h4>
                        <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!------------------ Javascript ----------------->
        <script type="text/javascript" src="script.js"></script>
    </body>

</html>