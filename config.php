<!--GET method used to verify username and password with database by Samuel Estes-->

<?php
   $severname = "localhost";
   $dbname = "bargain_bites";
   $dbusername = "root";
   $dbpassword = "";
   // Create connection
   $db = mysqli_connect($severname, $dbusername, $dbpassword, $dbname);

   ?>