<?php
  echo "<table border=\"2\">";
  echo "<tr> <th>post_id</th> <th>author_id</th> <th>content</th> </tr>";
  $mysqli = new mysqli("mysql.eecs.ku.edu", "m214g324", "Rd86Sf90Jd95Mg97", "m214g324");
  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $user_id = $_POST['UserName'];
  $userQuery = "SELECT * FROM Posts WHERE author_id='$user_id'";
  if ($queryResult = $mysqli->query($userQuery))
  {
    while ($row = $queryResult->fetch_assoc())
    {
      printf("<tr> <td>%s</td> <td>%s</td> <td>%s</td> </tr>", $row["post_id"], $row["author_id"], $row["content"]);
    }
  }
  echo "</table>";
  $result->free();
  $mysqli->close();
?>
