<?php

session_start();

require('model/Lesson.php');
require('model/LessonManager.php');
require('model/Member.php');
require('model/MemberManager.php');
require('controller/frontEnd.php');
require('controller/backend.php');


if(empty($_SERVER['QUERY_STRING']))
{
    
    home();
}else
{
        if(isset($_GET['action']))
        {
                if($_GET['action'] == 'home')
                {  
                        home();
                
                }
                elseif($_GET['action'] == 'connexion')
                {  
                        connexion(); 

                }
                elseif($_GET['action'] == 'admin')
                {
                        admin();
                }
                elseif($_GET['action'] == 'addPost')
                {  
                        admin();
                
                }
                elseif($_GET['action'] == 'addMember')
                {
                        admin();
                }  
                elseif($_GET['action'] == 'update')
                {  
                        update();
                
                }              
                elseif($_GET['action'] == 'lessons')
                {
                        lessons();
                }
                elseif($_GET['action'] == 'lesson')
                {
                        lesson();     
                        
                }
                elseif($_GET['action'] == 'delete')
                {  
                        delete();
                
                }
                elseif($_GET['action'] == 'deconnexion')
                {
                        deconnexion();
                }
                elseif($_GET['action'] == 'erreur')
                {
                        erreur();
                }else{
                        erreur();
                }    
        }else{
                header('location: index.php?action=erreur');
        }
}



