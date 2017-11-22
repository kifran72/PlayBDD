<?php
    ob_start();
    session_start();

    if(isset($_GET['page']) && !empty($_GET))
    {
        switch ($_GET['page']){

           
                //###########//

            case 'login':
                $content_for_layout = 'Vues/connexion/login.php';
                $title = 'Connexion';
                break; 
        
            case 'signin':
                    $content_for_layout = 'Vues/connexion/signin.php';
                    $title = 'Inscription';
                    break; 
                //###########//

            case 'dbconnect':
                $content_for_layout = 'Modeles/dbconnect.php';
                $title = 'dbconnect';
                break;     
            
            case 'login-mod':
                $content_for_layout = 'Modeles/login.php';
                $title = 'Connexion';
                break; 
        
            case 'signin-mod':
                    $content_for_layout = 'Modeles/signin.php';
                    $title = 'Inscription';
                    break; 

        }
    } else {
        $content_for_layout = 'Vues/accueil.html';
        $title = 'Accueil';
        }

    if(isset($_SESSION['logged']) && !empty($_SESSION))
    {
        if($_SESSION['logged'] == 0){
        
            include "Vues/layout/layout.php";
        
        } else {

        if(isset($_SESSION['Role']) && !empty($_SESSION)){
        
        if($_SESSION['Role'] == 0){

                include "Vues/layout/Default_Admin.php";
            }
            else{

                include "Vues/layout/Default_Connected.php";
            }
        }
                
            }

    } else {

        include "Vues/layout/layout.php";

    }

    
