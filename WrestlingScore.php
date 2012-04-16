<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php require_once "scoresheet.php"; ?>
<?php 
$W1Name = $_POST["W1name"];
$W1Weight = $_POST["W1Weight"];
$W1Score1 = $_POST["W1Score1"];
$W1Score2 = $_POST["W1Score2"];
$W1Score3 = $_POST["W1Score3"];
$W1Score4 = $_POST["W1Score4"];
$W1Score5 = $_POST["W1Score5"];
$W1Score6 = $_POST["W1Score6"];
$W1Score7 = $_POST["W1Score7"];
$W1Score8 = $_POST["W1Score8"];
$W1Score9 = $_POST["W1Score9"];
$W1Choice1 = $_POST["W1Choice1"];
$W1Score11 = $_POST["W1Score11"];
$W1Score12 = $_POST["W1Score12"];
$W1Score13 = $_POST["W1Score13"];
$W1Score14 = $_POST["W1Score14"];
$W1Score15 = $_POST["W1Score15"];
$W1Score16 = $_POST["W1Score16"];
$W1Score17 = $_POST["W1Score17"];
$W1Score18 = $_POST["W1Score18"];
$W1Score19 = $_POST["W1Score19"];
$W1Choice2 = $_POST["W1Choice2"];
$W1Score21 = $_POST["W1Score21"];
$W1Score22 = $_POST["W1Score22"];
$W1Score23 = $_POST["W1Score23"];
$W1Score24 = $_POST["W1Score24"];
$W1Score25 = $_POST["W1Score25"];
$W1Score26 = $_POST["W1Score26"];
$W1Score27 = $_POST["W1Score27"];
$W1Score28 = $_POST["W1Score28"];
$W1Score29 = $_POST["W1Score29"];
?>
<?php 
$W2name = $_POST["W2name"];
$W2Weight = $_POST["W2Weight"];
$W2Score1 = $_POST["W2Score1"];
$W2Score2 = $_POST["W2Score2"];
$W2Score3 = $_POST["W2Score3"];
$W2Score4 = $_POST["W2Score4"];
$W2Score5 = $_POST["W2Score5"];
$W2Score6 = $_POST["W2Score6"];
$W2Score7 = $_POST["W2Score7"];
$W2Score8 = $_POST["W2Score8"];
$W2Score9 = $_POST["W2Score9"];
$W2Choice1 = $_POST["W2Choice1"];
$W2Score11 = $_POST["W2Score11"];
$W2Score12 = $_POST["W2Score12"];
$W2Score13 = $_POST["W2Score13"];
$W2Score14 = $_POST["W2Score14"];
$W2Score15 = $_POST["W2Score15"];
$W2Score16 = $_POST["W2Score16"];
$W2Score17 = $_POST["W2Score17"];
$W2Score18 = $_POST["W2Score18"];
$W2Score19 = $_POST["W2Score19"];
$W2Choice2 = $_POST["W2Choice2"];
$W2Score21 = $_POST["W2Score21"];
$W2Score22 = $_POST["W2Score22"];
$W2Score23 = $_POST["W2Score23"];
$W2Score24 = $_POST["W2Score24"];
$W2Score25 = $_POST["W2Score25"];
$W2Score26 = $_POST["W2Score26"];
$W2Score27 = $_POST["W2Score27"];
$W2Score28 = $_POST["W2Score28"];
$W2Score29 = $_POST["W2Score29"];
?>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
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
	padding-right: 15pxs;
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

/* ~~ this fixed width container surrounds all other elements ~~ */
.container {
	width: 90%;
	background: #FFF; /* the auto value on the sides, coupled with the width, centers the layout */
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/
.content {

	padding: 10px 0;
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
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.tableHighlight {
	background-color: #CCC;
}
.tableHeader {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	background-color: #999;
}
.rowSpacer {
	background-color: #000;
}
-->
</style></head>

<body>

<div class="container">
  <div class="content">
    <h1>Wrestling Score Chart</h1>
    <hr />
    <form id="form1" name="form1" method="post" action="">
      <p>
        <label for="W1Name">Wrestler:</label>
        <input type="text" name="W1Name" id="W1Name" />
        <label for="Weight1">Weight:</label>
        <select name="Weight1" id="Weight1">
          <option>106</option>
          <option>113</option>
          <option>120</option>
          <option>126</option>
          <option>132</option>
          <option>138</option>
          <option>145</option>
          <option>152</option>
          <option>160</option>
          <option>170</option>
          <option>182</option>
          <option>195</option>
          <option>220</option>
          <option>285</option>
        </select>
        <label for="p1"><br />
        Scores:</label>
        <select name="p1" id="p1">
          <option value="<?php $t ?>">T</option>
          <option value="<?php $r ?>">R</option>
          <option value="<?php $e ?>">E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>
          <option selected="selected">N/A</option>
        </select>
        <label for="p2"></label>s
        <select name="p2" id="p2">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p3"></label>
        <select name="p3" id="p3">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p4"></label>
        <select name="p4" id="p4">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p5"></label>
        <select name="p5" id="p5">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p6"></label>
        <select name="p6" id="p6">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        | 
        <label for="Choice1W1"></label>
        <label for="Choice1w1">Choice 1</label>
        <select name="Choice1w1" id="Choice1w1">
          <option>^</option>
          <option>V</option>
          <option>||</option>
          <option>X</option>          <option selected="selected">N/A</option>
        </select>
      |      <br />
  <label for="p1">Scores:</label>
        <select name="p7" id="p1">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p2"></label>
        <select name="p7" id="p2">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p3"></label>
        <select name="p7" id="p3">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p4"></label>
        <select name="p7" id="p4">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p5"></label>
        <select name="p7" id="p5">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p6"></label>
        <select name="p7" id="p6">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
      | 
        <label for="Choice1W1"></label>
        <label for="Choice1w1">Choice 1</label>
        <select name="Choice1w4" id="Choice1w1">
          <option>^</option>
          <option>V</option>
          <option>||</option>
          <option>X</option>          <option selected="selected">N/A</option>
        </select>
| <br />
        <label for="p1">Scores:</label>
        <select name="p8" id="p1">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p2"></label>
        <select name="p8" id="p2">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p3"></label>
        <select name="p8" id="p3">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p4"></label>
        <select name="p8" id="p4">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p5"></label>
        <select name="p8" id="p5">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="p6"></label>
        <select name="p8" id="p6">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
|
<label for="Choice1W1"></label>
<label for="Choice1w1">Choice 1</label>
<select name="Choice1w6" id="Choice1w1">
          <option>^</option>
          <option>V</option>
          <option>||</option>
          <option>X</option>          <option selected="selected">N/A</option>
        </select>
| </p>
      <p>
        <label for="Wrestler2">Wrestler</label>:
        <input type="text" name="Wrestler2" id="Wrestler2" />
        <label for="Weight2">Weight:</label>
        <select name="Weight2" id="Weight2">
          <option>106</option>
          <option>113</option>
          <option>120</option>
          <option>126</option>
          <option>132</option>
          <option>138</option>
          <option>145</option>
          <option>152</option>
          <option>160</option>
          <option>170</option>
          <option>182</option>
          <option>195</option>
          <option>220</option>
          <option>285</option>
        </select>
     <br/>
        <label for="S1">Scores:</label>
        <select name="s1" id="s1">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s2"></label>
        <select name="s2" id="s2">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s3"></label>
        <select name="s3" id="s3">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s4"></label>
        <select name="s4" id="s4">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s5"></label>
        <select name="s5" id="s5">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s6"></label>
        <select name="s6" id="s6">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        |
        <label for="Choice1w2">Choice 1</label>
        <select name="Choice1w2" id="Choice1w2">
		   <option>^</option>
          <option>V</option>
          <option>||</option>
          <option>X</option>          <option selected="selected">N/A</option>
        </select>
      |
      <label for="S1"><br />
        Scores:</label>
      <select name="2s2" id="s1">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
      <label for="2s2"></label>
      <select name="s" id="s2">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
      <label for="2s3"></label>
      <select name="s" id="s3">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
      <label for="s4"></label>
      <select name="s" id="s4">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
      <label for="s5"></label>
      <select name="s" id="s5">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
      <label for="s6"></label>
      <select name="s" id="s6">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
      |
      <label for="Choice1w2">Choice 1</label>
      <select name="Choice1w3" id="Choice1w2">
                <option>^</option>
          <option>V</option>
          <option>||</option>
          <option>X</option>          <option selected="selected">N/A</option>
        </select>
|
<label for="S1"></label>
    <br />
        <label for="S1">Scores:</label>
        <select name="S3" id="S1">
              <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s2"></label>
        <select name="s7" id="s2">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s3"></label>
        <select name="s7" id="s3">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s4"></label>
        <select name="s7" id="s4">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s5"></label>
        <select name="s7" id="s5">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
        <label for="s6"></label>
        <select name="s7" id="s6">
      <option>T</option>
          <option>R</option>
          <option>E</option>
          <option>N2</option>
          <option>N3</option>
          <option>N4</option>
          <option>SW</option>
          <option>S</option>
          <option>TV</option>
          <option>P</option>
          <option>C</option>
          <option>C1</option>
          <option>W</option>
          <option>FS</option>          <option selected="selected">N/A</option>
        </select>
|
<label for="Choice1w2">Choice 1</label>
<select name="Choice1w5" id="Choice1w2">
          <option>^</option>
          <option>V</option>
          <option>||</option>
          <option>X</option>          <option selected="selected">N/A</option>
        </select>
|
<label for="S1"></label>
      </p>
      <p>	
        <input type="submit" name="submitScore" id="submitScore" value="Submit" />
        <input type="reset" name="eraseMatch" id="eraseMatch" value="Erase" />
      </p>
    </form>
    <div class="scoreTable" id="scoreTable">
      <table width="1492" border="1">
        <tr class="tableHeader">
          <td width="200">Wrestler</td>
          <td width="60">Weight</td>
          <td width="30">&nbsp;</td>
          <td width="30">P</td>
          <td width="30">O</td>
          <td width="30">I</td>
          <td width="30">N</td>
          <td width="30">T</td>
          <td width="30">S</td>
          <td width="30">&nbsp;</td>
          <td width="30">&nbsp;</td>
          <td width="36" class="tableHighlight">C</td>
          <td width="30">&nbsp;</td>
          <td width="30">P</td>
          <td width="30">O</td>
          <td width="30">I</td>
          <td width="30">N</td>
          <td width="30">T</td>
          <td width="30">S</td>
          <td width="30">&nbsp;</td>
          <td width="30">&nbsp;</td>
          <td width="36" class="tableHighlight">C</td>
          <td width="30">&nbsp;</td>
          <td width="30">P</td>
          <td width="30">O</td>
          <td width="30">I</td>
          <td width="30">N</td>
          <td width="30">T</td>
          <td width="30">S</td>
          <td width="30">&nbsp;</td>
          <td width="30">&nbsp;</td>
          <td width="74" class="tableHighlight">Wrestler</td>
          <td width="74" class="tableHighlight">Team</td>
        </tr>
        <tr>
          <td><?php $_GET["$W1name"]; ?></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr class="rowSpacer">
          <td>&nbsp;</td>
          <td>&nbsp;</td>

          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr class="rowSpacer">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr class="rowSpacer">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr class="rowSpacer">
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
          <td class="tableHighlight">&nbsp;</td>
        </tr>
      </table>
    </div>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
