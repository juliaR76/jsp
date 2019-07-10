<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="public/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="public/fonts/icomoon/style.css">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap/jquery-ui.css">
    <link rel="stylesheet" href="public/css/bootstrap/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/bootstrap/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/bootstrap/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/bootstrap/jquery.fancybox.min.css">
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/css/bootstrap/aos.css">
    <link rel="stylesheet" href="public/css/style.css">

    <script src="https://www.google.com/recaptcha/api.js?render=6LeS4qwUAAAAACB_Hs0M_iVkUoipIhFjzuwmOykQ"></script>
    <script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6LeS4qwUAAAAACB_Hs0M_iVkUoipIhFjzuwmOykQ', {
        action: 'home'}).then(function(token) {
            document.getElementById("token").value = token;        
        });
    });
  </script>
  
    <title>JSP</title>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.php?action=home">JSP de la Vallée du Cailly</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Accueil</a></li>
                                <li><a href="#info-section" class="nav-link">Infos</a></li>
                                <li><a href="#programs-section" class="nav-link">Inscription</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contactez nous</span></a></li>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </header>

        <div class="intro-section" id="home-section">
            <div class="slide-1" style="background-image: url('public/image/fire6.jpg');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-7 mb-4">
                                    <h1  data-aos="fade-up" data-aos-delay="100">Déjà Jeune Sapeur Pompier ?</h1>
                                    <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Connecte toi à la plateforme de cours des JSP de la Vallée du Cailly !</p>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="index.php?action=connexion" class="btn btn-primary py-3 px-5 btn-pill">Connexion</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <div class="site-section courses-entry-wrap" id="info-section" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel col-12 nonloop-block-14">
                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <img src="public/image/fire2.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3><a href="#">Les jeunes sapeurs pompiers en Seine Maritime</a></h3>
                                <p>Il existe en Seine Maritime 21 sections de Jeunes Sapeurs Pompiers.
                                    Ces JSP sont regroupés au sein de l'Union Départementale des Sapeurs Pompiers dont l'objectif est de les initier au métier de Soldat du Feu. </p>
                            </div>
                        </div>
                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="public/image/fire2.jpg" alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">                              
                                <h3><a href="#">Objectif de la formation ?</a></h3>
                                <p>Les sections de JSP ont pour objet de développer chez les jeunes un esprit d'initiative et de les initier aux techniques propres aux sapeurs pompiers afin de susciter des vocations. </p>
                            </div>
                        </div>
                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="public/image/fire2.jpg" alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3><a href="#">Que fait un JSP ?</a></h3>
                                <p> - Il apprend à connaître le matériel d'incendie<br>
                                    - Il participe à des manœuvres régulières<br>
                                    - Il pratique le sport et concours aux évènements sportifs régionaux<br>
                                    - Il s'initie au secourisme<br>
                                    - Il se prépare au brevet de cadets de sapeurs pompiers </p>
                            </div>
                        </div>
                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="public/image/fire2.jpg" alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <h3><a href="#">Study Law of Physics</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-7 text-center">
                        <button class="customPrevBtn btn btn-primary m-1">Precedent</button>
                        <button class="customNextBtn btn btn-primary m-1">Suivant</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-image overlay" id="programs-section" style="background-image: url('public/image/smoke3.jpg');">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-9 text-center testimony">
                        <blockquote>
                            <h2>Devenir jeune sapeur-pompier (JSP), c’est :</h2>
                                <p><i class="fas fa-arrow-right"></i> Découvrir le matériel et les techniques de lutte contre l’incendie</p>
                                <p><i class="fas fa-arrow-right"></i> Apprendre les gestes qui sauvent</p>
                                <p><i class="fas fa-arrow-right"></i> Faire du sport et participer à des compétitions sportives</p>
                                <p><i class="fas fa-arrow-right"></i> Apprendre à évoluer au sein d’une équipe et à se dépasser</p>
                                <p><i class="fas fa-arrow-right"></i> Partager des valeurs de solidarité et de civisme</p>
                                <hr class="my-4">
                                <p>En Seine-Maritime, c’est l’union départementale des sapeurs-pompiers (UDSP 76) qui gère et encadre la formation des JSP.</p>
                                <p>Pour connaitre les modalités </p>
                                <a class="btn btn-primary" href="index.php?action=contact" role="button">Contactez-nous</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h2 class="section-title mb-3">Contactez-nous</h2>
                        <?php if(isset($erreur)){ echo $erreur; } ?>          
                        <form method="post" data-aos="fade">
                            <div class="form-group row">
                                <div class="col-md-6 mb-3 mb-lg-0">
                                <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                                </div>
                                <div class="col-md-6">
                                <input type="text" name="nom" class="form-control" placeholder="Nom" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="text" name="object" class="form-control" placeholder="Objet">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="email" name="email" class="form-control" placeholder="Email" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Ecrivez votre message."></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">   
                                <input type="submit" name="sendMail"  id="sendMessageButton" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Envoyer">
                                </div>
                            </div>
                            <input type="hidden" id="token" name="token"> 
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>A propos</h3>
                        <p>Centre d'Incendie et de secours (CIS)</p>
                        <p>Rue Winston Churchill</p>
                        <p>76710 Montville</p>
                    </div>

                    <div class="col-md-3 ml-auto">
                        <h3>Liens</h3>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#home-section">accueil</a></li>
                            <li><a href="#info-section">Infos</a></li>
                            <li><a href="#programs-section">Inscription</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>   
                </div>
            </div>
        </footer>    
    </div>

    <script src="https://kit.fontawesome.com/b011453f67.js"></script>
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="public/js/jquery-ui.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.stellar.min.js"></script>
    <script src="public/js/jquery.countdown.min.js"></script>
    <script src="public/js/bootstrap-datepicker.min.js"></script>
    <script src="public/js/jquery.easing.1.3.js"></script>
    <script src="public/js/aos.js"></script>
    <script src="public/js/jquery.fancybox.min.js"></script>
    <script src="public/js/jquery.sticky.js"></script>
    <script src="public/js/main.js"></script>
</body>
</html>