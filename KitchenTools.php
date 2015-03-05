<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #424d3C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~this fixed width container surrounds the other divs~~ */
.container {
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background-color: #33CC33;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #33CC33;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 780px;
	float: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background-color: #33CC33;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: 33CC33;
	color: #FFF;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background-color: #00C6C6;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
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
-->
</style></head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="" alt="Insert Logo Here" name="Insert_logo" width="180" height="90" id="Insert_logo" style="background-color: #33CC33; display:block;" /></a> 
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#">Link one</a></li>
      <li><a href="#">Link two</a></li>
      <li><a href="#">Link three</a></li>
      <li><a href="#">Link four</a></li>
    </ul>
    <p> </p>
    <p>Test</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p></p>
    <p></p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>Kitchen Tools</h1>
    <p><?php

//Variables
$convertCategory = $_GET['convertCategory'];
$Input = $_GET['Input'];
$convertResult;
$convertFrom;
$convertTo;

# determine value of conversionValue
	if ($convertCategory == 'cup-cup')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Cups";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'cup-gallon')
	{
		$convertResult = $Input * 0.0625;
		$conversionFrom = "Cups";
		$conversionTo = "Gallons";	 
	}
	if ($convertCategory == 'cup-ounce')
	{
		$convertResult = $Input * 8;
		$conversionFrom = "Cups";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'cup-pint')
	{
		$convertResult = $Input * 0.5;
		$conversionFrom = "Cups";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'cup-quart')
	{
		$convertResult = $Input * 0.25;
		$conversionFrom = "Cups";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'cup-tablespoon')
	{
		$convertResult = $Input * 16;
		$conversionFrom = "Cups";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'cup-teaspoon')
	{
		$convertResult = $Input * 48;
		$conversionFrom = "Cups";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'gallon-cup')
	{
		$convertResult = $Input * 16;
		$conversionFrom = "Gallons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'gallon-gallon')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Gallons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'gallon-ounce')
	{
		$convertResult = $Input * 128;
		$conversionFrom = "Gallons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'gallon-pint')
	{
		$convertResult = $Input * 8;
		$conversionFrom = "Gallons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'gallon-quart')
	{
		$convertResult = $Input * 4;
		$conversionFrom = "Gallons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'gallon-tablespoon')
	{
		$convertResult = $Input * 256;
		$conversionFrom = "Gallons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'gallon-teaspoon')
	{
		$convertResult = $Input * 768;
		$conversionFrom = "Gallons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'ounce-cup')
	{
		$convertResult = $Input * 0.125;
		$conversionFrom = "Ounces";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'ounce-gallon')
	{
		$convertResult = $Input * 0.007813;
		$conversionFrom = "Ounces";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'ounce-ounce')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Ounces";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'ounce-pint')
	{
		$convertResult = $Input * 0.0625;
		$conversionFrom = "Ounces";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'ounce-quart')
	{
		$convertResult = $Input * 0.03125;
		$conversionFrom = "Ounces";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'ounce-tablespoon')
	{
		$convertResult = $Input * 2;
		$conversionFrom = "Ounces";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'ounce-teaspoon')
	{
		$convertResult = $Input * 6;
		$conversionFrom = "Ounces";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'pint-cup')
	{
		$convertResult = $Input * 2;
		$conversionFrom = "Pints";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'pint-gallon')
	{
		$convertResult = $Input * 0.125;
		$conversionFrom = "Pints";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'pint-ounce')
	{
		$convertResult = $Input * 32;
		$conversionFrom = "Pints";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'pint-pint')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Pints";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'pint-quart')
	{
		$convertResult = $Input * 0.5;
		$conversionFrom = "Pints";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'pint-tablespoon')
	{
		$convertResult = $Input * 32;
		$conversionFrom = "Pints";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'pint-teaspoon')
	{
		$convertResult = $Input * 96;
		$conversionFrom = "Pints";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'quart-cup')
	{
		$convertResult = $Input * 4;
		$conversionFrom = "Quarts";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'quart-gallon')
	{
		$convertResult = $Input * 0.25;
		$conversionFrom = "Quarts";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'quart-ounce')
	{
		$convertResult = $Input * 32;
		$conversionFrom = "Quarts";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'quart-pint')
	{
		$convertResult = $Input * 2;
		$conversionFrom = "Quarts";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'quart-quart')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Quarts";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'quart-tablespoon')
	{
		$convertResult = $Input * 64;
		$conversionFrom = "Quarts";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'quart-teaspoon')
	{
		$convertResult = $Input * 192;
		$conversionFrom = "Quarts";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'tablespoon-cup')
	{
		$convertResult = $Input * 0.0625;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'tablespoon-gallon')
	{
		$convertResult = $Input * 0.003906;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'tablespoon-ounce')
	{
		$convertResult = $Input * 0.5;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'tablespoon-pint')
	{
		$convertResult = $Input * 0.03125;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'tablespoon-quart')
	{
		$convertResult = $Input * 0.015625;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'tablespoon-tablespoon')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'tablespoon-teaspoon')
	{
		$convertResult = $Input * 3;
		$conversionFrom = "Tablespoons";
		$conversionTo = "Teaspoons";	
	}
	if ($convertCategory == 'teaspoon-cup')
	{
		$convertResult = $Input * 0.020833;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Cups";	
	}
	if ($convertCategory == 'teaspoon-gallon')
	{
		$convertResult = $Input * 0.001302;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Gallons";	
	}
	if ($convertCategory == 'teaspoon-ounce')
	{
		$convertResult = $Input * 0.166667;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Ounces";	
	}
	if ($convertCategory == 'teaspoon-pint')
	{
		$convertResult = $Input * 0.010417;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Pints";	
	}
	if ($convertCategory == 'teaspoon-quart')
	{
		$convertResult = $Input * 0.005208;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Quarts";	
	}
	if ($convertCategory == 'teaspoon-tablespoon')
	{
		$convertResult = $Input * 0.333333;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Tablespoons";	
	}
	if ($convertCategory == 'teaspoon-teaspoon')
	{
		$convertResult = $Input * 1;
		$conversionFrom = "Teaspoons";
		$conversionTo = "Teaspoons";	
	}
	
	
	if ($convertCategory == 'null')
	{	
		echo "Error. Null value.";
		die;
	}

# output results
echo "$Input $convertFrom = $convertResult $convertTo";

?></p>
    <h3>Conversion Tools</h3>
    <p><?php if (isset($this->convertedValue)) { ?>
    	<p><b>Conversion: <?= $this->convertedValue; ?></b></p>
    <?php } ?>
    
    <form action="/" method="post">
    
    <p>
    From:<br />
    <input type="text" name="source_val" value="" size="3" />
    <select name="source_type">
    <option value="CUP_US">Cups</option>
	<option value="GALLON_US">Gallons</option>
	<option value="OUNCE_US">Ounces</option>
	<option value="PINT_US">Pints</option>
	<option value="QUART_US">Quarts</option>
	<option value="TABLESPOON_US">Tablespoons</option>
	<option value="TEASPOON_US">Teaspoons</option>
	</select>
	</p>

	<p>
	To:<br />
	<select name="destination_type">
	<option value="CUP_US">Cups</option>
	<option value="GALLON_US">Gallons</option>
	<option value="OUNCE_US">Ounces</option>
	<option value="PINT_US">Pints</option>
	<option value="QUART_US">Quarts</option>
	<option value="TABLESPOON_US">Tablespoons</option>
	<option value="TEASPOON_US">Teaspoons</option>
	</select>
	</p>

	<p>
	<input type="submit" name="submit" value="Convert!" />
	</p>

	</form></p>
    <h4>&nbsp;</h4>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  <div class="footer">
    <p>This .footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the .footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
