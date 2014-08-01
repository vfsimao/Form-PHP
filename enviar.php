<?php

       $to= 'victor@vfsimao.com';
       $subject= "Formulário de contato do site.";

       // from the form
       $name= $_REQUEST['name'];
       $email= $_REQUEST['email'];
       $fone= $_REQUEST['fone'];
       $message= $_REQUEST['message'];

       // set here

              $body = "<strong> Mensagem de contato </strong> <br><br>";
              $body .= "<br><strong> Nome: </strong> $name";
              $body .= "<br><strong> Email: </strong> $email";
              $body .= "<br><strong> Telefone: </strong> $fone";
              $body .= "<br><strong> Mensagem: </strong> $message";

              $headers= "Content-type: text/html; charset= utf-8\n";
              $headers .= "From: $email; Reply-to: $email\n";
              

       // send the email
       @mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: obrigado.html');
?>