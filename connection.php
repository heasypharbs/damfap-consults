<?php
    $servername='damfapconsults.com';
    $username='damfapco_damfapco';
    $password='09n8.EVQ7h(pWn';
    $dbname = "damfapco_damfap";
    $connection=mysqli_connect($servername,$username,$password,$dbname);
      if(!$connection){
          die('Could not Connect MySql Server:' .mysql_error());
       echo ("you are connected"); }
?>

