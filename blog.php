<!DOCTYPE html>
<html>
<head>
   <title>The Blog</title>
   <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.css'/>
   <link rel='stylesheet' type='text/css' href='blog_style.css'/>
</head>
<body>
   <!-- The Header should go hear, code background, "The Blog" title -->
   <!-- NavBar is on the side? Either that or list of blog titles -->
   <header>
      <h1>The Blog</h1>
   </header>
   <br/><br/>
   <div class='container'>
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
            echo "<div class='container post'>";
            echo "<h3>" . $row['PostTitle'] . "</h3>";
            echo $row['PostDate'];
            echo "<br/><br/>";
            echo $row['PostBody'];
            echo "</div>";
            echo "<br/><br/>";
         }

         mysqli_close($con);
      ?>
   </div>
</body>
</html>
