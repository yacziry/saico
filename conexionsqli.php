<?php
      $db_host = 'localhost'; // Server Name
      $db_user = 'root'; // Username
      $db_pass = ''; // Password
      $db_name = 'metalografia'; // Database Name
 
      $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
      if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
                  }
                    /* cambiar el conjunto de caracteres a utf8 */
         if (!$conn->set_charset("utf8")) {
            //printf("Error cargando el conjunto de caracteres utf8: %s\n", $link->error);
            exit();
          } else {
           // printf("Conjunto de caracteres actual: %s\n", $link->character_set_name());
          }
?>