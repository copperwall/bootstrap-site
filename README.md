# Personal Site

This is a personal website, that I am writing with the help of [bootstrap](http://github.com/twitter/bootstrap).

As of recently, the homepage is mostly complete. Most of the new work I'm doing on this is going to the blog page, which uses php to read from a local mysql database. Currently, all posts are loaded from the db, but I would like to display one at a time and let the user load more as they want.

This site is hosted at [chrisopperwall.com](http://chrisopperwall.com), which is hosted from my Raspberry Pi. New changes to the site will be shown here.

## Update

I have moved my production hosting to my Raspberry Pi, so now I will have to find another testing environment to use.

## Upcoming Improvements
1. Finish the side content pane
1. Make it so that the side content pane scroll with the page, until the scrolltop height reaches the bottom of the header, then lock the side panel (jQuery?)
1. Add jQuery/JavaScript to smooth scroll down to the top of the newest posts when the "Moar Posts" button is clicked
1. (**DONE**)Add AJAX support so that additional blog posts can be added by clicking a button at the bottom of the posts shown
