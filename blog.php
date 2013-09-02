<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <?php
      // Create Connection
      $con=mysqli_connect("localhost", "me",  "", "Test");

      // Check connection
      if (mysqli_connect_errno($con))
      { 
         echo "Failed to connect to MYSQL: " . mysqli_connect_error();
      }

      $result = mysqli_query($con,"SELECT * FROM blog");
      
      while($row = mysqli_fetch_array($result))
      {
         echo "<h3>" . $row['PostTitle'] . "</h3>";
         echo "<br>";
         echo "By: " . $row['Author'];
         echo "<br/><br/>";
         echo $row['PostBody'];
         echo "<br/><br/>";
      }

      mysqli_close($con);
   ?>
</body>
</html>
