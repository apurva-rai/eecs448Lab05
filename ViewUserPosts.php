<?php

echo "<h3>" . $_POST['user'] . "'s Posts</h3>";

echo "<table><tr>
              <th>Post ID</th>
              <th>Post</th>
             </tr>";

$mysqli = new mysqli("mysql.eecs.ku.edu","apurva","Qwerty1234!","apurva");

$output = "SELECT * FROM Posts WHERE author_id ='" . $_POST['user'] . "';";

if($input = $mysqli->query($output))
{

  while($r = $input->fetch_assoc())
  {

    echo "<tr><td>" . $r['post_id'] . "</td></td>" . $r['content'] . "</td></tr>";

  }

}

echo "</table>";

?>
