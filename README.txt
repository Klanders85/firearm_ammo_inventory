This is a templated project/file structure I made taking parts from BoilerPlate & Normalize.css.
I also included a Sass directory with main.scss included with some base styles I placed in there.

Easy Use

1. Clone down repo
2. Store anywhere (I keep mine on my desktop)
3. When you have a new project, just rename and you are all set <~~~~~ hence the name :)


Sass Stuff
/********************************************************************
When running Sass using this structure the watch command will be:
sass --watch sass/main.scss:css/main.css


To minify the CSS file:
sass --watch sass/main.scss:css/main.css --style compressed
*******************************************************************/



Additions
/********************************************************************
Add these CDNs to the HEAD element in this order

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js"></script>

The first is the jQuery CDN (version might change)
The second is the jQuery CDN for the validate plugin
*******************************************************************/

