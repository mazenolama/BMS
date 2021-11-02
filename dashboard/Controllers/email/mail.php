<?php

  /************************* Create New User ************************/

    function email_new_user($fname_user,$lname_user,$email_user,$password_user,$full_name){
      $subject = "Hadef Information Technology Co. invites you to join their Hadef Bills account";
      $hadefEmail = "olamamazen@gmail.com";
      $user_template_file= "Controllers/email/userTemp.php";
      
      $swap_var = array(
        "{USER_FIRST_NAME}" => $fname_user,
        "{USER_LAST_NAME}" => $lname_user,
        "{PASSWORD}" => $_POST['password'],
        "{EMAIL}" => $email_user,
        "{FULL_NAME}" =>  $full_name,
      );

      if(file_exists($user_template_file))
      {
        $message = file_get_contents($user_template_file);
      }
      else{
        $_SESSION['error']='unable to locate template file';
      }

      // search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
      foreach (array_keys($swap_var) as $key){
        if (strlen($key) > 2 && trim($swap_var[$key]) != '')
          $message = str_replace($key, $swap_var[$key], $message);
      }

      $userHeaders = 'From: '.$full_name.' <'.$hadefEmail.'>' . "\r\n" .
                      'Bcc: mazen.ziad@hadefit.com' . "\r\n" .
                      'MIME-Version: 1.0' . "\r\n" .
                      'Content-Type: text/html; charset=ISO-8859-1' . "\r\n" .
                      'X-Mailer: PHP/' . phpversion();

      if(mail($email_user, $subject, $message, $userHeaders))
      {
          $_SESSION['success'] = 'Sent An Email To New User Successfully';
          die("<script>window.location = 'index.php?page=View-Users'; window.reload();</script>");
      }
      else{
          $_SESSION['error']='Created User But Failed while sending Email!';
      }
     
    }
  /************************* Create New User ************************/
?> 