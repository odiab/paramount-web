<?php
/*** set the content type header ***/
header("Content-type: text/css");
?>

<?php

/*
 * Name your images 1.jpg, 2.jpg etc.
 *
 * Add this line to your page where you want the images to 
 * appear: <?php include "/randomimage.php"; ?>
 */ 

// Change this to the total number of images in the folder
$total = "6";

// Change to the type of files to use eg. .jpg or .gif
$file_type = ".JPG";

// Change to the location of the folder containing the images
$image_folder = "/images/SkylineHeaders";

$start = "1";
$random = mt_rand($start, $total);

$image_name = "pmount0" . $random . $file_type;
$image_path = $image_folder."/".$image_name;
?>

@charset "utf-8";
/* CSS Document */


body {
	font: 90%/1.4 Trebuchet MS, Verdana, Helvetica, Arial, sans-serif;
	background: #d8f0f3;
	margin: 0;
	padding: 0;
	color: #000;
	background-image: url(/images/bgroundGradient.PNG);
	background-repeat: no-repeat;
    background-position: left top;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}

ul.nobullet {
	list-style-type: none;	
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	margin-bottom: 1px;
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
	font-weight: normal;
	color: #000;
}

h1 {
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: #F90;
}

h2 {
	color: #2C93BA;
}

h3 {
	color: #3A9AC0;
	font-size: 110%;
}

a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

hr {
	border: 1;
}

hr.hralt {
	  border-left: 0;
      border-right: 0;
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      color: #fff;
      background-color: #fff;
      height: 4px;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #69C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #C3F;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: underline;
	color: #C00;
}

/* ~~this fixed width container surrounds the other divs~~ */
.container {
	width: 960px;
	background: transparent;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomright: 10px;
	border-bottom-right-radius: 10px;
	padding-bottom: 40px;
}

.headerlogo{
	behavior: url(ie-css3.htc);
	background-image: url(<?php echo $image_path; ?>);
	-webkit-border-top-left-radius: 30px;
	-moz-border-radius-topleft: 30px;
    border-top-left-radius: 30px;
	-moz-box-shadow: -2px 2px 6px rgba(0,0,0,0.6);
	-webkit-box-shadow: -2px 2px 6px rgba(0,0,0,0.6);
}

.navbuttontable {
	background: #ffffff;
	behavior: url(ie-css3.htc);
	-moz-box-shadow: -2px 2px 6px rgba(0,0,0,0.6);
	-webkit-box-shadow: -2px 2px 6px rgba(0,0,0,0.6);
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/

#bodybox {
behavior: url(ie-css3.htc);
width: 100%;
background: #fff;
-webkit-border-bottom-right-radius: 30px;
-moz-border-radius-bottomright: 30px;
border-radius: 0px 0px 10px 0px;
-moz-box-shadow: -2px 2px 6px rgba(0,0,0,0.6);
-webkit-box-shadow: -2px 2px 6px rgba(0,0,0,0.6);
}

.sidebar1 {
	float: left;
	width: 198px;
	padding-left: 2px;
	height: 100%;
	background: #fff;
	padding-bottom: 10px;
}
.content {
	background: #fff;
	padding: 10px 0;
	width: 760px;
	float: left;
	text-align: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles */
#nav {
	width: 100%;
	float: left;
	margin: 0 0 .5em 0;
	padding: 0;
	list-style: none;
	background-color: #f2f2f2;
	border-bottom: 1px solid #ccc; 
	border-top: 1px solid #ccc; }
#nav li {
	float: left; }
#nav li a {
	display: block;
	padding: 8px 15px;
	text-decoration: none;
	font-weight: bold;
	color: #069;
	border-right: 1px solid #ccc; }
#nav li a:hover {
	color: #c00;
	background-color: #fff; }

/* ~~ The footer ~~ */
.footer {
	padding: 0;
	background: #DDDDDD;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomright: 10px;
	-khtml-border-radius: 0px 0px 10px 0px;
	border-radius: 0px 0px 10px 0px;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.style4 {	font-size: small
}
.container .header table {
	font-size: 30px;
}
.container .header table {
	font-size: 20px;
}
.container .header table {
	font-size: 15px;
}
.container .header table {
	font-size: 20px;
}
.container .header table {
	font-family: garamond;
}
.container .header table {
	font-family: arial;
}
.container .header table {
}


.container .header .navbuttontable table {
	font-family: Trebuchet MS, Verdana, Helvetica, Arial, sans-serif;
}
.container .header .navbuttontable table {
	font-weight: bold;
	font-size: 30px;
}
.container .header .navbuttontable table {
	font-size: 25px;
	color: #314E99;
}

table.cellLink td {padding:0}
table.cellLink td a {height: 200px; display:block}
