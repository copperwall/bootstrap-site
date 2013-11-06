<!DOCTYPE html>
<html>
<head>
   <title>The OpperBlog</title>
   <link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.css'/>
   <link rel='stylesheet' type='text/css' href='blog_style.css'/>
   <script type='text/javascript' src='ajax.js'></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
   <!-- The Header should go hear, code background, "The Blog" title -->
   <!-- NavBar is on the side? Either that or list of blog titles -->
   <header>
      <h1>The OpperBlog</h1>
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
                  <li><strong>JavaScript (AJAX)</strong></li>
               </ul>
            Each post gets written in plaintext, and then parsed and inserted by a Python script.<br/>The MySQL database is then queried through php each time the page loads.
            </p>
         </div>
         <div class='span8' id='content_pane'>
            <div id='all_posts'>
               <?php include 'getPosts.php';?>
            </div>
            <div class='row'>
               <div id='moarPosts' class='post well lead' onclick='moarPosts()'>Moar Posts</div>
            </div>
            <br/><br/>
         </div>
      </div>
   </div>
</body>
</html>
