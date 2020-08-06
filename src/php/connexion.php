<?php $conn = mysqli_connect('mysql1.inulogic.fr','hv21392-inulogic', 'test', 'test');
      if ($conn-> connect_error) {
        die('connection failed:'. $conn-> connect_error);
      }
            
      $conn->set_charset('utf8'); ?>