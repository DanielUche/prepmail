<html>
   
   <head>
      <title></title>
   </head>
   <body>
   <p>
   		My experirence with creating wep apps and microservies will enable me fit into the role of a senior software developer with preplass.
   </p>
   	
   </body>
   
   <body>
      
      <?php
         $to = "riomachi@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:dank.uche@yahoo.com \r\n";
         $header .= "Cc:doctorfox29@yahoo.co.uk \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
