<?php
    echo "<table border=\"2\">";
    echo "<tr><th>user_id</th></tr>";
    $mysqli = new mysqli("mysql.eecs.ku.edu", "m214g324", "Rd86Sf90Jd95Mg97", "m214g324");
    if ($mysqli->connect_errno)
    {
        printf("Connection failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $userQuery = "SELECT user_id FROM Users";
    if($queryResult = $mysqli->query($userQuery))
    {
        while($row = $result->fetch_assoc())
        {
            printf("<tr><td>%s</td></tr>", $row["user_id"]);
        }
    }
    echo "</table>";
    $queryResult->free();
    $mysqli->close();
?>