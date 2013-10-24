<!DOCTYPE html>
<html>
<head>
   <title>The Blog</title>
   <link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.css'/>
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
         <div class='span4 well' id='info_pane'>
            <!-- Nav or description goes here -->
            <h5>Thoughts and Such</h5>
            <p>
            I use this space to post anything new with my site, and any new projects or thoughts I feel like sharing.
            </p>
            <h5>What is this?</h5>
            <p>My blog!</p>
            <p>
            I built this using
               <ul>
                  <li><strong>MySQL</strong></li>
                  <li><strong>PHP</strong></li>
                  <li><strong>HTML/CSS + Bootstrap</strong></li>
                  <li><strong>Python</strong></li>
               </ul>
            Each post gets written in plaintext, and then parsed and inserted by a Python script.<br/>The MySQL database is then queried through php each time the page loads.
            </p>
         </div>
         <div class='span8' id='content_pane'>
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
         </div>
      </div>
   </div>
</body>
</html>
