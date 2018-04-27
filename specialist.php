<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!--<link rel="stylesheet" href="css/icon-font.css">-->
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
                <form action="specialization_script.php" method="GET" >
                <div class="form-group">
                       <label for="specialization"></label>
                       <input type="text" class="form-control" name="specialization" placeholder="Type any specialization">
                       </div>
                       <button class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </header>
<div class="container marketing">

            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle" src="https://images1-fabric.practo.com/dr-sharad-shangloo-1469442034-5795e7f24ac1c.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Dr. sharad shangloo</h2>
                <p>BHMS</br>
                    17 years experience</br>
                    Homoeopath - provides Cancer Treatment</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="https://images1-fabric.practo.com/dr-rakesh-raj-1469516775-57970be7728a9.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Dr. Rakesh Raj</h2>
                <p>BHMS, MD - HomeopathyBHMS</br>
                    31 years experience</br>
                    Homoeopath - provides Cancer Treatment</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="https://images1-fabric.practo.com/doctor/534666/dr-v-b-mishra-5a521d8267224.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Dr. V.M. Misra</h2>
                <p>BAMS, MD - Ayurveda</br>
                    16 years experience</br>
                    Ayurveda - provides Cancer Treatment</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                    <img class="rounded-circle" src="https://images1-fabric.practo.com/doctor/581732/dr-prashant-sinha-599d71a51b5ae.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Dr. Prashant Sinha</h2>
                    <p>MBBS, MD - Dermatology , Venereology and Leprosy</br>
                        8 years experiencee</br>
                        Venereologist</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-lg-4">
                        <img class="rounded-circle" src="https://images1-fabric.practo.com/dr-sumati-saxena-1489981065-58cf4e8918724.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Dr. Sumati Saxena</h2>
                        <p>MBBS, MS - Obstetrics & Gynaecology</br>
                            27 years experience</br>
                            Gynecologist/Obstetrician</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4">
                            <img class="rounded-circle" src="https://images1-fabric.practo.com/dr-ritu-sinha-1452764002-56976b628db18.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h2>Dr. Ritu Sinha</h2>
                            <p>MBBS, MS - Obstetrics & Gynaecology</br>
                                25 years experience</br>
                                Gynecologist/Obstetrician</p>
                            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                          </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
    
          </div><!-- /.container -->

        
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