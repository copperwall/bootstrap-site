function showUser() {
   if (window.XMLHttpRequest) {
      xmlHttp = new XMLHttpRequest();
   }
   else {
      alert('Please update your browser to IE7+, Chrome, Firefox, Safari, Opera, etc.');
   }
   // Get lowest post id placed in html somewhere or something
   lastPostId = 0;
   xmlHttp.open("GET","getAllUsers.php?q="+(str)lastPostId,true);
   xmlHttp.send();
}
