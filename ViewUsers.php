<html>
  <head>
      <title>Create User</title>
      <link href ="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <table align="center">
      <tr>
        <th>Username</th>
      </tr>
      <?php

        $mysqli = new mysqli("mysql.eecs.ku.edu","apurva","Qwerty1234!","apurva");

        $output = "SELECT * FROM Users;";

        if($input = $mysqli->query($output))
        {

          while($r = $input->fetch_assoc())
          {

            echo"<tr><td>". $r['user_id'] . "</td></tr>";

          }

          $input->free();

        }

        $mysqli->close();

      ?>
  </body>
</html>
