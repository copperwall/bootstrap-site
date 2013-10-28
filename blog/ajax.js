function moarPosts() {

   if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
   }
   else {
      alert('Please update your browser to IE7+, Chrome, Firefox, Safari, Opera, etc.');
   }

   xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
         document.getElementById('all_posts').innerHTML
          = document.getElementById('all_posts').innerHTML
          + "\n" + xmlhttp.responseText;
      }
   }
   // Get lowest post id placed in html somewhere or something
   lastPostId = document.getElementById('lastPostMade').innerHTML;
   //alert("Fetching next two posts with id's less than " + lastPostId);
   xmlhttp.open("GET","getPosts.php?q="+lastPostId,true);
   xmlhttp.send();
}
