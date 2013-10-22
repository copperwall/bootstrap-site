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
   <div class='container-fluid'>
      <div class='row-fluid'>
         <div class='span2' id='info_pane'>
            <!-- Nav or description goes here -->
            <p>/* This is where an info pane would go
                  Test  Test Test
                  Test Test
                  Test */</p>
         </div>
         <div class='span10' id='content_pane'>
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
               echo "<div class='span9 offset1 post'>";
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
         </div>
      </div>
   </div>
</body>
</html>
