<?php 
require 'include/common.php';
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->
         <!---- External css file index.css placed in the folder css is linked--> 
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/new.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" href="css/main.css">
       
        
        <title>PRUDENT</title>
    </head>

    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="index.php" class="navigation__link"><span>01.</span>Home</a></li>
                    <li class="navigation__item"><a href="login.php" class="navigation__link"><span>02.</span>LogIn / SignUp</a></li>
                    <li class="navigation__item"><a href="self.php" class="navigation__link"><span>03.</span>Self Help</a></li>
                    <li class="navigation__item"><a href="specialist.php" class="navigation__link"><span>04.</span>Find a Specialist</a></li>
                    <li class="navigation__item"><a href="about.php" class="navigation__link"><span>05.</span>About Us</a></li>
                    </ul>
            </nav>
        </div>

        <header class="header">
            <div class="header__logo-box">
                <img src="img/logo-white.png" alt="Logo" class="header__logo">
            </div>

            <div class="header__text-box">
            <br><br><br><br>
                
<div class="container">
     
     <div class="row row-style">
           
           <div class="col-xs-6 col-xs-offset-3">
         <div class="panel panel-default">
             <div class="panel-heading">
             <h2><b>SIGN UP</b></h2>
             </div>
               <div class="panel-body">
                   <form method="POST" action="signup_script.php">
                   
                   <div class="form-group">
                       <label for="name"></label>
                       <input type="text" class="form-control" name="name" placeholder="Name">
                       </div>
                       <div class="form-group">
                       <label for="email"></label>
                       <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9._%+-]+\.[a-z]{2,3}$">
                       </div>
                        <div class="form-group">
                       <label for="password"></label>
                       <input type="password" class="form-control" name="password" placeholder="password" required="true" pattern=".{6,}">
                       </div>
                       <div class="form-group">
                       <label for="contact"></label>
                       <input type="text" class="form-control" name="contact" placeholder="Contact">
                       </div>
                      
                   <button class="btn btn-primary">Submit</button>
                   </form>
                   
             </div>
             <div class="panel-footer"><p>Already have an acoount?<a href="login.php" id="register"> LogIn</a></p></div>
               </div>
         </div>
           
           </div>
     
     
     </div>
                <!-- <a href="#section-features" class="btn btn--white btn--animated">Discover our Services</a> &nbsp &nbsp &nbsp  -->
                <!-- <a href="signup.php" class="btn btn--white btn--animated">LogIn / SignUp</a> -->
            </div>
        </header>



        <footer class="footer">
            <div class="footer__logo-box">
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item"><a href="about.php" class="footer__link">About Us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
                            <li class="footer__item"><a href="#" class="footer__link">Credits</a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="footer__copyright">
                        lorem ipsum <a href="#" class="footer__link">lorem ipsum</a> for his online course <a href="#" class="footer__link">lorem ipsum lorem ipsum</a>.
                        Copyright &copy; by lorem ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                        has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
            </div>
        </footer>

        
    </body>
</html>