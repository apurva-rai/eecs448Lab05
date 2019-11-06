<?php

$mysqli = new mysqli("mysql.eecs.ku.edu","apurva","Qwerty1234!","apurva");

foreach($_POST['delete'] as $postID)
{

  $output = "DELETE FROM Posts WHERE post_id ='" . $postID . "';";

  if($input = $mysqli->query($output))
  {

    echo "Post " . $postID . " successfully deleted.";

  }
  else
  {

    echo "Post" . $postID . "could not be deleted.";

  }

}

$output = "DELETE FROM Posts WHERE post_id'" . $_POST['post_id'] . "';";

if($input = $mysqli->query($output))
{

  while($r = $input->fetch_assoc())
  {

    echo "<tr><td>" . $r['post_id'] . "</td><td>" . $r['content'] . "</td></tr>";

  }

}

echo "</table>";

?>
s
