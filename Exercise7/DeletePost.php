<?php
  $deletePosts = $_POST['deletePosts'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "m214g324", "Rd86Sf90Jd95Mg97", "m214g324");
  if ($mysqli->connect_errno)
  {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
  }
  if(isset($deletePosts))
  {
    foreach($deletePosts as $post_id)
    {
      $query = "DELETE FROM Posts where post_id='$post_id'";
      $mysqli->query($query);
      echo "Post " . $post_id . " has been deleted.<br>";
    }
  }
  $mysqli->close();
?>
