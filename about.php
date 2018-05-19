<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

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
                    <li class="navigation__item"><a href="index.php" class="navigation__link"><span>01.</span>Home</a></li>
                    <li class="navigation__item"><a href="login.php" class="navigation__link"><span>02.</span>LogIn / SignUp</a></li>
                    <li class="navigation__item"><a href="self.php" class="navigation__link"><span>03.</span>Self Help</a></li>
                    <li class="navigation__item"><a href="specialist.php" class="navigation__link"><span>04.</span>Find a Specialist</a></li>
                    <li class="navigation__item"><a href="about.php" class="navigation__link"><span>05.</span>About Us</a></li>
                    </ul>
            </nav>
        </div>

        

        <main>
            <section class="section-about">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        ABOUT US
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">Lorem Ipsum is simply dummy text of the printing </h3>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                            ducimus quam nisi exercitationem omnis earum qui.
                        </p>

                        <h3 class="heading-tertiary u-margin-bottom-small">Lorem Ipsum is simply dummy text</h3>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
                        </p>

                        <a href="about.php" class="btn-text">Learn more &rarr;</a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <img srcset="img/apollo.jpg 300w, img/apollo-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 1"
                                 class="composition__photo composition__photo--p1"
                                 src="img/apollo-large.jpg">

                            <img srcset="img/stanley.jpg 300w, img/cmc-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 2"
                                 class="composition__photo composition__photo--p2"
                                 src="img/stanley-large.jpg">

                            <img srcset="img/fortis.jpg 300w, img/fortis-large.jpg 1000w"
                                 sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                                 alt="Photo 3"
                                 class="composition__photo composition__photo--p3"
                                 src="img/fortis-large.jpg">
                        </div>
                    </div>
                </div>
            </section>

            
        </main>

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