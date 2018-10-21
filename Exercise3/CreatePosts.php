<?php
  $user_name = $_POST['Username'];
  $post = $_POST['Post'];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "m214g324", "Rd86Sf90Jd95Mg97", "m214g324");
  if($mysqli->connect_errno)
  {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT user_id FROM Users WHERE user_id='$user_name'";
  if(($result = $mysqli->query($query))->fetch_assoc())
  {
    $postQuery = "INSERT INTO Posts (author_id, content) VALUES('" . $user_name . "', '" . $post . "')";
    $mysqli->query($postQuery);
    echo "New post created by " . $user_name .;
  }
  else
  {
    echo "This username does not exist. Try a different username or create a new user.";
  }
  $result->free();
  $mysqli->close();
?>
