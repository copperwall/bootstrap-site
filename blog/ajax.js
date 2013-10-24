function moarPosts() {
   if (window.XMLHttpRequest) {
      xmlHttp = new XMLHttpRequest();
   }
   else {
      alert('Please update your browser to IE7+, Chrome, Firefox, Safari, Opera, etc.');
   }

   xmlHttp.onreadystatechange = function() {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
         document.getElementById('content_pane').innerHTML
          = document.getElementById('content_pane').innerHTML
          + "\n" + xmlHttp.responseText;
      }
   }
   // Get lowest post id placed in html somewhere or something
   lastPostId = document.getElementById('lastPostMade').innerHTML;
   xmlHttp.open("GET","getAllUsers.php?q="+(str)lastPostId,true);
   xmlHttp.send();
}
