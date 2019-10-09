<?php
//start session
session_start();
//load and initialize database class
require_once '../core/db.php';
$db = new DB();
//set default redirect url
$redirectURL = '../../'.$db->url;

if(isset($_POST['change'])){
  if(!empty($_POST['npassword']) && !empty($_POST['cpassword']))
    {
            //Get tHE session
            if($_SESSION['category']==''):$redirectURL .= '../change.php';
            elseif($_POST['npassword']!=$_POST['cpassword']):
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Les deux Mot de Passe ne correspondent pas!';
                //set redirect url
                $redirectURL = '../views/change.php';  
            else:
                    $tblName = 'membre';
                    $userData = array
                    (
                        'password' => sha1($_POST['npassword']),
                        'pin' => 1
                    );
                    $condition=array('membreID' => $_SESSION['ID'] );

                //Update the table new password 
                $update = $db->update($tblName, $userData, $condition);
                if($update){
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg'] = 'L\'Operation a été exécutée correctement!';
                //set redirect url
                    $redirectURL .= '../index.php';

                }
                else{
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg'] = 'Operation failed, try again later ';
                    
                    //set redirect url
                    $redirectURL .= '../change.php';
                }
                
            endif;
    }
    //store status into the session
    $_SESSION['sessData'] = $sessData;
    
    //redirect to the list page
    header("Location:".$redirectURL);
}
exit();
?>