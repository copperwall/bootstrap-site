<html>
<head>
   <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.css'/>
   <style>
      body {
         background-image: url(http://eaassets-a.akamaihd.net/www.battlefield.com/sites/default/files/styles/gallery_1920_1080/public/BF4genKEYART.jpg?v=1386624694431rc4);
         background-position: center 20%;
         background-size:cover;
      }

      h1 {
         text-align:center;
         vertical-align:middle;
      }

      header {
         top:0;
         width:100%;
         background:white;
      }

      header h1 {
         margin: auto;
      }
   </style>
</head>
<body>
   <header>
      <h1 id='display'></h1>
   </header>

   <script>
      var time = <?php echo mktime(0, 0, 0, 12, 27, 2013) - (time() -  28800); ?>;
      var min;
      var hour;
      var day;
      var sec; 

      function calc_time() {
         min = Math.floor(time % 3600 / 60);
         hour = Math.floor(time % 86400/ 3600);
         day = Math.floor(time / 86400);
         sec = Math.floor(time % 60);
      }

      var display = document.getElementById('display');

      setInterval( function () {
         calc_time();
         --time;
         display.innerHTML = day + " days " + hour + " hours " + min + " min " + sec + " sec";
      }, 1000);
         

   </script>
</body>
