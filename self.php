<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <!---- External css file index.css placed in the folder css is linked--> 
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/new.css" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->

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
                    <li class="navigation__item"><a href="home.php" class="navigation__link"><span>01.</span>Home</a></li>
                    <!-- <li class="navigation__item"><a href="signup.php" class="navigation__link"><span>02.</span>LogIn / SignUp</a></li> -->
                    <li class="navigation__item"><a href="self.php" class="navigation__link"><span>02.</span>Self Help</a></li>
                    <li class="navigation__item"><a href="specialist.php" class="navigation__link"><span>03.</span>Find a Specialist</a></li>
                    <li class="navigation__item"><a href="about.php" class="navigation__link"><span>04.</span>About Us</a></li>
                    </ul>
            </nav>
        </div>

        <header class="header">
            <div class="header__logo-box">
                <img src="img/logo-white.png" alt="Logo" class="header__logo">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Prudent</span>
                    <span class="heading-primary--sub">care and thoughtful future</span>
                </h1>

                <!-- <a href="#section-features" class="btn btn--white btn--animated">Discover our Services</a> &nbsp &nbsp &nbsp  -->
                <!-- <a href="signup.php" class="btn btn--white btn--animated">LogIn / SignUp</a> -->
                <div class="btn btn--white btn--animated">
                <form action="self_script.php" >
                <div class="form-group">
                       <label for="disease"></label>
                       <input type="text" class="form-control" name="disease" placeholder="Disease name">
                       </div>
                       <button class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </header>

        

        
    </body>
</html>