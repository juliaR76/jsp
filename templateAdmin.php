<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <link rel="stylesheet" href="public/css/styleAdmin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=2y78n40ius7vughan8q8sfql8nml9nmphby5042rx7rz77ox"></script>
    <script type="text/javascript">
      tinymce.init({
          selector: '#myTextarea',
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

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" id="#navbarResponsive" role="banner">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.php?action=admin">JSP VDC</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="index.php?action=admin" class="nav-link"><?= $_SESSION['pseudo'].'  '?><img id="imgProfil" src="public/image/avatar/<?= $member->avatar() ?>" width="40px;"></a></li>
                                <li><a href="index.php?action=lessons" class="nav-link">Cours</a></li>
                                <li><a href="index.php?action=deconnexion" class="nav-link">Deconnexion</a></li>
                            </ul>
                        </nav>
                        <button class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right" tupe="button" data-target="#navbarResponsive"><span class="icon-menu h3"></span></button>
                    </div>
                </div>
            </div>
        </header>

        <?= $content ?>

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
                            <li><a href="index.php?action=admin">Tableau du bord</a></li>
                            <li><a href="index.php?action=lessons">Cours</a></li>
                            <li><a href="index.php?action=deconnexion">Deconnexion</a></li>
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
    
    <script src="public/js/admin.js"></script>
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>