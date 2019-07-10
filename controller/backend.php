<?php

function admin()
{

    // if(isset($_POST['updateAvatar']))
    // {
    //     if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
    //     {
    //         $fileName = $_FILES['avatar']['tmp_name'];
    //         list($width_origin, $height_origin) = getimagesize($fileName);

    //         if($width_origin >= 500 && $height_origin >= 500 && $width_origin <= 6000 && $height_origin <= 6000)
    //         {
    //             $listExtension = array('jpg', 'jpeg', 'png', 'gif');
    //             $maxSize = 2097152; //2Mo
    //             $extensionValide = ('jpg', 'jpeg', 'png');

    //             if($_FILES['avatar']['size'] <= $maxSize) // on verifie que l'image ne depasse pas 2M0
    //             {
    //                 $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1)); // on prend l'extension après le point

    //                 if(in_array($extensionUpload, $extensionValide)) // verifie que l'extesion est correcte
    //                 {
    //                     $dossier = "public/member".$_SESSION['id']. "/"; // on se deplace dans le dossier de la personne

    //                     if(!is_dir($dossier)) // si le nom du dossier n'existe pas alors on le creer
    //                     {
    //                         mkdir($dossier);
    //                     }else
    //                     {
    //                         if(file_exists("public/member/".$_SESSION['id']. "/".$_SESSION['avatar']) && isset($_SESSION['avatar']))
    //                         {
    //                             unlink("public/member/".$_SESSION['id']. "/".$_SESSION['avatar']);
    //                         }
    //                     }

    //                     $nom = md5(uniqid(rand(), true)); // permet de generer un nom unique au fichier
    //                     $chemin = "public/member/".$_SESSION['id']."/".$nom.".".$extensionUpload; // chemin pour placer la photo
    //                     $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);

    //                     if($resultat) //alors on compresse le fichier
    //                     {
    //                         if(is_readable("public/member/".$_SESSION['id']."/".$nom.".".$extensionUpload))
    //                         {
    //                             $verif_ext = getimagesize("public/member/".$_SESSION['id']."/".$nom.".".$extensionUpload);
                                
    //                             //verif des extension avec la list des extension autorisés
    //                             if($verif_ext['mine'] == $listExtension[$extensionUpload])
    //                             {
    //                                 $fileName = "public/member/".$_SESSION['id']."/".$nom.".".$extensionUpload;
    //                             }
    //                         }
    //                     }


    //                 }

    //             }else{

    //             $msg = 'Votre image dépasse la taille autorisé'
    //         }else{

    //             $msg = 'Votre image dépasse la taille autorisé'
    //         }
    //     }else{
    //         $msg = 'Veuillez choisir un fichier';
    //     }
    // }






    // if(isset($_POST['updateAvatar']))
    // {
    //     if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
    //     {
    //         $fileName = $_FILES['avatar']['tmp_name'];
    //         $maxSize = 2097152; //2M0
    //         // $extensionValide = array('jpg', 'png', 'jpeg');
            

    //         if($_FILES['avatar']['size'] <= $maxSize)
    //         {
    //             $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

    //             if(in_array($extensionUpload, $extensionValide))
    //             {
    //                 $chemin = "public/member/avatar/".$_SESSION['id'].".".$extensionUpload;
    //                 $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
    //                 if($resultat)
    //                 {
    //                     $member = new Member([
    //                         "avatar" => $_SESSION['id'].".".$extensionUpload,
    //                         "id" => $_SESSION['id']
    //                     ]);
                        
    //                     $memberManager = new MemberManager;
    //                     $memberManager->update($member);
    //                     var_dump($_POST);
    //                     var_dump($_SESSION);
    //                 }
    //                 else
    //                 {
    //                     $msg = "Erreur durant l'importation du fichier";
    //                 }
    //             }
    //             else
    //             {
    //                 $msg = "Votre photo de profil doit être au format jpg, jpeg, ou png";
    //             }
    //         }
    //         else
    //         {
    //             $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
    //         }

    //     }
    //     else
    //     {
    //         $msg = "Veuillez choisir un fichier";
    //     }
    // }    
    ob_start();
    require('view/admin.php');
    $content = ob_get_clean(); 
    require('template_Back.php');
}

// function AllPost()
// {
//     $lessonManager = new LessonManager;
//     $lessons = $lessonManager->getAll();
//     ob_start();
//     require('view/lessons.php');
//     $content = ob_get_clean(); 
//     require('template_Back.php');
// }

function cours()
{
    $lessonManager = new LessonManager;
    $lesson = $lessonManager->getId();
    ob_start();
    require('view/lessons.php');
    $content = ob_get_clean(); 
    require('template_Back.php');
}

function deconnexion()
{
    session_start();
    $_SESSION = array();
    session_destroy();
    header('location: index.php?action=connexion');
}
