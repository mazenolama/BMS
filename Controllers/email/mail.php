<?php
  
  /************************* Create New User ************************/
    function email_reset_user($fname_user,$lname_user,$email_user,$msg,$otp,$status){
      $subject =  " Hadef Bills " . $msg;
      $user_template_file= "Controllers/email/userTemp.php";
      
      $swap_var = array(
        "{USER_FIRST_NAME}" => $fname_user,
        "{USER_LAST_NAME}" => $lname_user,
        "{MSG}" => $msg,
        "{OTP}" => $otp      
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

      $headers =  'From: Hadef Bills <support@hadefbills.com>' . "\r\n" .
                      'Bcc: mazen.ziad@hadefit.com' . "\r\n" .
                      'MIME-Version: 1.0' . "\r\n" .
                      'Content-Type: text/html; charset=ISO-8859-1' . "\r\n" .
                      'X-Mailer: PHP/' . phpversion();
      $execute = mail($email_user, $subject, $message, $headers);
      if($execute)
        $status = true;
      else
        $status = false;
    }
  /************************* Create New User ************************/

?> 
