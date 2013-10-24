<?php
   // Create Connection
   $con=mysqli_connect("localhost", "me",  "", "blog");

   // Check connection
   if (mysqli_connect_errno($con))
   { 
      echo "Failed to connect to MYSQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"SELECT * FROM Posts ORDER BY id DESC");
   
   while($row = mysqli_fetch_array($result))
   {
      echo "<div class='row'>";
      echo "<div class='post well'>";
      echo "<h2>" . $row['title'] . "</h2>";
      echo $row['datePosted'];
      echo "<br/><br/>";
      echo "<p>" . $row['body'] . "</p>";
      echo "</div>";
      echo "</div>";
      echo "<br/><br/>";
   }

   mysqli_close($con);
?>
