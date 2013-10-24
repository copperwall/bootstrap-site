<?php
   $q = intval($_GET['q']); // q = 0 if no q request

   // Create Connection
   $con=mysqli_connect("localhost", "me",  "", "blog");

   // Check connection
   if (mysqli_connect_errno($con))
   { 
      echo "Failed to connect to MYSQL: " . mysqli_connect_error();
   }

   if ($q != 0)
   {
      $result = mysqli_query($con,"SELECT * FROM Posts WHERE id < ".$q." ORDER BY id DESC LIMIT 2");
   }
   else
   {
      $result = mysqli_query($con,"SELECT * FROM Posts ORDER BY id DESC LIMIT 2");
   }

   $lastId = $q;
   
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
      $lastId = $row['id'];
   }

   echo "<div id='lastPostMade'>".$lastId."</div>";

   mysqli_close($con);
?>
