<?php

  /************************* Create New User ************************/

    function email_new_user($fname_user,$lname_user,$email_user,$password_user,$full_name){
      $subject = "Hadef Information Technology Co. invites you to join their Hadef Bills account";
      $hadefEmail = "olamamazen@gmail.com";
      $user_template_file= "Controllers/email/userTemp.php";
      
      $swap_var = array(
        "{USER_FIRST_NAME}" => $fname_user,
        "{USER_LAST_NAME}" => $lname_user,
        "{PASSWORD}" => $password_user,
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
          die("<script>window.location = 'Users'; window.reload();</script>");
      }
      else{
          $_SESSION['error']='Created User But Failed while sending Email!';
      }
     
    }
  /************************* Create New User ************************/

  /************************* Send Email Invoice ************************/
    function email_invoice($i_id, $type, $about,$client_fname,$client_lname,$client_email,$created_date,$payment_date,$title,$amount,$tax,$tax_prg,$discount,$discount_prg,$total){
      $subTotal =null;
      $subject = "Hadef Information Technology Co. " . $about;
     
      $hadefEmail = "mazen.olama00@gmail.com";
      $clinet_template_file= "Controllers/email/invoiceTemp.php";
      $subTotal = $amount;
      $swap_var = array(
        "{TITTLE}" => $about,
        "{CLIENT_FIRST_NAME}" => $client_fname,
        "{CLIENT_LAST_NAME}" => $client_lname,
        "{CREATED_DATE}" => $created_date,
        "{PAYMENT_DATE}" => $payment_date,
        "{INVOICE_TITLE}" => $title,
        "{AMOUNT}" => $amount,
        "{TAX}" => $tax,
        "{TAX_PRG}" => $tax_prg,
        "{DISCOUNT}" => $discount,
        "{DISCOUNT_PRG}" => $discount_prg,
        "{SUBTOTAL}" => $subTotal,
        "{TOTAL}" => $total,
      );

      if(file_exists($clinet_template_file))
      {
        $message = file_get_contents($clinet_template_file);
      }
      else{
        $_SESSION['error']='unable to locate template file';
      }

      // search and replace for predefined variables, Such as SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
      foreach (array_keys($swap_var) as $key){
        if (strlen($key) > 2 && trim($swap_var[$key]) != '')
          $message = str_replace($key, $swap_var[$key], $message);
      }

      $clientHeaders = 'From: Hadef IT <'.$hadefEmail.'>' . "\r\n" .
                      'Bcc: mazen.ziad@hadefit.com' . "\r\n" .
                      'MIME-Version: 1.0' . "\r\n" .
                      'Content-Type: text/html; charset=ISO-8859-1' . "\r\n" .
                      'X-Mailer: PHP/' . phpversion();

      if(mail($client_email, $subject, $message, $clientHeaders))
      {
          $_SESSION['success'] = 'Created A New Invoice And Sent It Successfully';
          if($type == 'create')
            die("<script>window.location = 'Invoices'; window.reload();</script>");
          else
            die("<script>window.location = 'Invoice?i_id=$i_id'; window.reload();</script>");
      }
      else{
          $_SESSION['error']='Created A New Invoice But Failed while sending Email!';
      }
     
    }
  /************************* Send Email Invoice ************************/

?> 
