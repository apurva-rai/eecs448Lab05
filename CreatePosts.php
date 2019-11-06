<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$username =  $_POST['user'];
$post = $_POST['postpls'];

$mysqli = new mysqli("mysql.eecs.ku.edu","apurva","Qwerty1234!","apurva");

      if($mysqli->connect_errno)
      {

        echo "Connection failed: " . $mysqli->connect_error;
        exit();

      }

      $output = "SELECT * FROM Users WHERE user_id = '". $username ."';";

      //echo $output;
      //echo "<br>";

      if(mysqli_num_rows($mysqli->query($output)) == 0)
      {

        echo "Username does not exist in the system.";

      }
      else
      {

        if(empty($post))
        {

          echo "Post message cannot be empty.";

        }
        else
        {

          $output = "INSERT INTO Posts (content, author_id) VALUES ('" . $post . "','" . $username ."');";

          if($mysqli->query($output))
          {

            echo "Post made successfully.";

          }
          else
          {

            echo "Error in posting.";

          }

        }

      }
?>
