<?php


function home()
{
    ob_start();
    require('view/home.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
    
}

function infos()
{
    ob_start();
    require('view/infos.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
}

function inscription()
{
    if(isset($_POST['creerCompte']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $first_name = htmlspecialchars($_POST['first_name']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $pass = sha1($_POST['pass']);
        $confirmationPass = sha1($_POST['confirmationPass']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);

        if(!empty($_POST['pseudo']) AND !empty($_POST['last_name']) AND !empty($_POST['first_name']) AND !empty($_POST['adresse']) AND !empty($_POST['pass']) AND !empty($_POST['confirmationPass']) AND !empty($_POST['email']) AND !empty($_POST['phone']))
        {
            if($_POST['pass'] == $_POST['confirmationPass'])
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    $user = new Member([
                    'pseudo' => $_POST['pseudo'],
                    'last_name' => $_POST['last_name'],
                    'first_name' => $_POST['first_name'],
                    'adresse' => $_POST['adresse'],
                    'pass' => sha1($_POST['pass']),
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone']
                    ]);
                    $memberManager = new MemberManager;
                    $member = $memberManager->add($user);
                    header('location: index.php?action=connexion');
                }
                else
                {
                    $erreur ='<html>
                    <body>
                        <div class="alert alert-danger" role="alert">
                            Votre email est invalide!
                        </div>
                    </body>
                    </html>'; 
                }
            }
            else
            {
                $erreur ='<html>
                        <body>
                            <div class="alert alert-danger" role="alert">
                                Vos mots de pass ne corresponde pas!
                            </div>
                        </body>
                        </html>';
            }
        }
        else
            {
                $erreur ='<html>
                        <body>
                            <div class="alert alert-danger" role="alert">
                                Attention de bien remplir tout les champs !
                            </div>
                        </body>
                        </html>';
            }         
    }

    ob_start();
    require('view/inscription.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
}

function connexion()
{   
    if(isset($_POST['connecter']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pass = sha1($_POST['pass']);
        
        if(!empty($_POST['pseudo']) AND !empty($_POST['pass']))
        {
            $memberManager = new MemberManager;
            $member = $memberManager->get($_POST['pseudo'], sha1($_POST['pass']));
            $_SESSION['id'] = $member->id();
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['email'] = $member->email();
            $_SESSION['last_name'] = $member->last_name();
            $_SESSION['first_name'] = $member->first_name();
            $_SESSION['adresse'] = $member->adresse();
            $_SESSION['phone'] = $member->phone();
            header('location: index.php?action=admin');
        } 
        else
        {
            $erreur ='<html>
                        <body>
                            <div class="alert alert-danger" role="alert">
                                Attention de bien remplir tout les champs!
                            </div>
                        </body>
                     </html>';                       
        }
           
    }
 
    ob_start();
    require('view/connexion.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
}

function contact()
{
    if(isset($_POST['sendMail']))
    {
        if(!empty($_POST['object']) AND !empty($_POST['email']) AND !empty($_POST['message']))
        {
            $header="MIME-version: 1.0\r\n";
            $header.='From:"PrimFX.com"<support@jeanf.com>'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message=
                '<html>
                    <body>
                        <div align="center">   
                            <u>objet de l\'expéditeur :</u>'.$_POST['object'].'<br />
                            <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
                            <br />
                            '.nl2br($_POST['message']).'
                        </div>
                    </body>
                </html>';

             mail("julia.ristic@gmail.com", "Contact - Mon site", $message, $header);
             echo "<script>window.alert(\"Votre message a bien été envoyé !\")</script>";
        }
        else
        {
            $erreur ='<html>
                        <body>
                            <div class="alert alert-danger" role="alert">
                                Attention de bien remplir tout les champs de votre billet !
                            </div>
                        </body>
                        </html>';
        }
    } 
    ob_start();
    require('view/contact.php');
    $content = ob_get_clean(); 
    require('template_Front.php');    
}




