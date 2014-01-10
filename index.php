<!DOCTYPE html>

<html>
<head>
   <title>Chris Opperwall</title>
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
   <link rel='stylesheet' type='text/css' href='my_style.css'/>
   <meta name="description" content="Chris Opperwall's Personal Website"/>
   <meta name="keywords" content="Chris, Opperwall, Chris Opperwall, Computer Science, Student"/>
   <meta name="author" content="Chris Opperwall"/>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
   <?php include_once("analyticstracking.php") ?>
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <ul class='nav navbar-nav mynav'>
         <li><a class='navbar-brand' href='#'>Chris Opperwall</a></li>
         <li><a href='#aboutme'>About</a></li>
         <li><a href='#projects'>Projects</a></li>
         <li><a href='blog'>Blog</a></li>
         <li><a href='ChrisOpperwallResume.pdf'>Resume</a></li>
      </ul>
   </nav>
   <!--
   <div class='navbar-wrapper'>
      <div class='container'>
         <div class="navbar navbar-inverse">
            <a class="navbar-brand" href="#">Chris Opperwall</a>
            <ul class="nav">
               <li class="active"><a href="#">Home</a></li>
               <li id="nav_about"><a href="#aboutme_snippet">About</a></li>
               <li id="nav_projects"><a href="#projects_snippet">Projects</a></li>
               <li id="nav_blog"><a href="blog">Blog</a></li>
               <li id="nav_resume"><a href="ChrisOpperwallResume.pdf">Resume</a></li>
            </ul>
         </div>
      </div>
   </div>
   -->
   <div class='jumbotron'>
      <div class='container' id="welcome">
         <div class='col-md-6'>
            <h1>Welcome!</h1><br/>
            <p>I am a third year computer science student at <a href='http://calpoly.edu'>Cal Poly, San Luis Obispo</a>. I spend most of my time learning about Linux, exploring with web development, and working on my coursework.<br/><br/> This site contains information about my experiences, projects, and education. Feel free to take a look around!
            </p>
         </div>
      </div>
   </div>
   <div class='container'>
      <div class='row' id='aboutme'>
      <div class='col-md-4 col-md-offset-1'>
         <img id='about_picture' src='me2.jpg'/>
      </div>
      <div class='col-md-5 col-md-offset-1' id='aboutme_snippet'>
         <h1 class='pull-right'>About Me</h1><br/>
         <p class='snippet' id='about_text'>
            I currently study computer science at Cal Poly, SLO, and I
            just completed an internship at Copart Inc., as a Java Engineer Intern in Fairfield,
            CA. I've been involved in music for many years, including high
            school marching band, Cal Poly bands, and Drum &amp; Bugle Corps.
            I really enjoy looking up new developments in the computer science
            world, but I'm particularly interested with JavaScript and
            UNIX programming at the moment. 
            <br/><a href='soon.html'>More about me</a>
         </p>
      </div>
      </div> <!-- End of Row -->
      <div class='spacer'></div>
      <div class = 'row' id='projects'>
         <div class='col-md-5 col-md-offset-1 pull-left' id='projects_snippet'>
            <h1 class='pull-left'>My Projects</h1><br/>
            <p class='snippet pull-right'>
               Some of the bigger school projects I have done consist of
               an LZW compression and decompression program in C and 
               a MIPS emulator written in Java. I've also been working on a blog and bitcoin market value counter, in an effort to become more familiar with web design, as well as backend technologies (PHP and MySQL). Most of these projects are
               on on my <a href='http://github.com/copperwall'>github</a>. A page with more in depth explanations on each should be coming soon.
               <br/><a href='soon.html'>More projects</a>
            </p>
         </div>
         <div class='col-md-offset-1 col-md-4 snippet'>
            <a href='https://github.com/copperwall' style='display:block'>
               <img src='github.png' title='To Github!'/>
            </a>
         </div>
      </div> <!-- End Of Row -->
   </div>
   <div class='spacer'></div>
   <div class='container' id='footer'>
      <hr/>
      <small class='text-muted'>
         // The source for this site is open and hosted on
         <a href='http://github.com/copperwall/personal-site'>github</a>.
      </small>
      <ul class='list-inline pull-right' id='contact_bar'>
         <li class='text-muted'>Contact Me: </li>
         <!-- <li></li> -->
         <li> <a href='mailto:copperwa@calpoly.edu'><button class='btn'><i class='icon-envelope'></i> Email</button></a> </li>
         <li> <a href="https://twitter.com/copperwall" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @copperwall</a> </li>
         <li> 
            <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
            <script type="IN/MemberProfile" data-id="http://www.linkedin.com/pub/chris-opperwall/1b/893/a16" data-format="click" data-related="false"></script>
         </li>
      </ul>
   </div>

   <!-- This script animates the scrolling from navbar links to their snippets -->
   <script>
      var $body = $('html, body');

      $('a').click(function() {
         $body.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - 60
         }, 400);
         return false;
      });
   </script>
   <!-- Twitter Support -->
   <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
