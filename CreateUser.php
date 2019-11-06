<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$username =  $_POST['user'];

  if(!empty($username))
  {

      $mysqli = new mysqli("mysql.eecs.ku.edu","apurva","Qwerty1234!","apurva");

      if($mysqli->connect_errno)
      {

        echo "Connection failed: " . $mysqli->connect_error;
        exit();

      }

      $output = "INSERT INTO Users (user_id) VALUES ('". $username ."');";

      //echo $output;
      //echo "<br>";

        if($input = $mysqli->query($output))
        {

          echo "Username successfully added to the system.";

        }
        else
        {

          echo "Username is taken.";

        }

  }
  else
  {

    echo "Empty username cannot be added to database.<br>";

  }

?>
