<?php


function home(){

    if(isset($_POST['sendMail']))
    {

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => "6LeS4qwUAAAAAITou3lReGOb7qef-pALA3y1aIyW",
            'response' => $_POST['token'],
            'remoteip' => $_SERVER['REMOTE_ADDR']
            ];

        $options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $res = json_decode($response, true);

        if($res['success'] == true) {
                // Perform you logic here for ex:- save you data to database
            $erreur = '<div class="alert alert-success">
                            <strong>Success!</strong> VOtre message à bien été envoyé.
                        </div>';
        } else {
            $erreur = '<div class="alert alert-warning">
                            <strong>Error!</strong> Vous n\'êtes pas un humain.
                        </div>';
        }

        
        if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['object']) AND !empty($_POST['email']) AND !empty($_POST['message']))
        {
            

            $header="MIME-version: 1.0\r\n";
            $header.='From:"PrimFX.com"<support@jeanf.com>'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message=
                '<html>
                    <body>
                        <div align="center"> 
                            <u>Nom et prenom de l\'expéditeur :</u>'.$_POST['nom'].' '.$_POST['prenom'].'<br />  
                            <u>objet de l\'expéditeur :</u>'.$_POST['object'].'<br />
                            <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
                            <br />
                            '.nl2br($_POST['message']).'
                        </div>
                    </body>
                </html>';

             mail("julia.ristic@gmail.com", "Contact - Mon site", $message, $header);
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

    require('template.php');
}

function connexion()
{   
    if(isset($_POST['connecter']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        
        
        if(!empty($_POST['pseudo']) || !password_verify($_POST['pass'], $data) )
        {
            
            $memberManager = new MemberManager;
            $member = $memberManager->get($_POST['pseudo']);
            
            $_SESSION['id'] = $member->id();
            $_SESSION['avatar'] = $member->avatar();
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['email'] = $member->email();
            $_SESSION['last_name'] = $member->last_name();
            $_SESSION['first_name'] = $member->first_name();
            $_SESSION['adresse'] = $member->adresse();
            $_SESSION['phone'] = $member->phone();
            $_SESSION['authorization'] = $member->authorization();
            
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
    require('templatePage.php');
}
