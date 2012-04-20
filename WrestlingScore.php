<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php require_once "scoresheet.php"; ?>
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
		<?php
			function displayPlayer($n) {
				?>
				<p>
				<label for="W<?php echo $n; ?>Name">Wrestler:</label>
				<input type="text" name="W<?php echo $n; ?>Name" id="W<?php echo $n; ?>Name" />
				<label for="W<?php echo $n; ?>Weight">Weight:</label>
				<select name="W<?php echo $n; ?>Weight" id="Weight<?php echo $n; ?>">
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
				<?php 
				$k = 0;
				for ($i = 1; $i <= 3; $i++) {
					?>
						<label for="p<?php echo $i; ?>listing1"><br />
						Scores:</label>
					<?php
					for ($j = 1; $j <= 6; $j++) { 
						$k++;
						?>
						<select name="W<?php echo $n; ?>Score<?php echo $k; ?>">
						  <option value="t">T</option>
						  <option value="r">R</option>
						  <option value="e">E</option>
						  <option value="n2">N2</option>
						  <option value="n3">N3</option>
						  <option value="n4">N4</option>
						  <option value="sw">SW</option>
						  <option value="s">S</option>
						  <option value="tv">TV</option>
						  <option value="p">P</option>
						  <option value="c">C</option>
						  <option value="c1">C1</option>
						  <option value="w">W</option>
						  <option value="fs">FS</option>
						  <option selected="selected">N/A</option>
						</select>
					<?php }
					?>
						| 
						<label for="p<?php echo $i; ?>choice">Choice <?php echo $i; ?></label>
						<select name="p<?php echo $i; ?>choice" id="p<?php echo $i; ?>choice">
						  <option value="^">^</option>
						  <option value="V">V</option>
						  <option value="||">||</option>
						  <option value="X">X</option>
						  <option selected="selected">N/A</option>
						</select>
					  |
					<?php
				}
				echo "</p>";
			}
			displayPlayer(1);
			displayPlayer(2);
		?>
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
		<?php
		$result = $db->query("SELECT * FROM matches");
		while ($row = $result->fetch()) {
		?>
			<tr>
			  <td><?php echo $row['w1']; ?></td>
			  <td><?php echo $row['w1_weight']; ?></td>
			  <td><?php echo $row['w1_score1']; ?></td>
			  <td><?php echo $row['w1_score2']; ?></td>
			  <td><?php echo $row['w1_score3']; ?></td>
			  <td><?php echo $row['w1_score4']; ?></td>
			  <td><?php echo $row['w1_score5']; ?></td>
			  <td><?php echo $row['w1_score6']; ?></td>
			  <td><?php echo $row['w1_score7']; ?></td>
			  <td><?php echo $row['w1_score8']; ?></td>
			  <td><?php echo $row['w1_score9']; ?></td>
			  <td class="tableHighlight"><?php echo $row['choice2']; ?></td>
			  <td><?php echo $row['w1_score10']; ?></td>
			  <td><?php echo $row['w1_score11']; ?></td>
			  <td><?php echo $row['w1_score12']; ?></td>
			  <td><?php echo $row['w1_score13']; ?></td>
			  <td><?php echo $row['w1_score14']; ?></td>
			  <td><?php echo $row['w1_score15']; ?></td>
			  <td><?php echo $row['w1_score16']; ?></td>
			  <td><?php echo $row['w1_score17']; ?></td>
			  <td><?php echo $row['w1_score18']; ?></td>
			  <td class="tableHighlight"><?php echo $row['choice3']; ?></td>
			  <td><?php echo $row['w1_score19']; ?></td>
			  <td><?php echo $row['w1_score20']; ?></td>
			  <td><?php echo $row['w1_score21']; ?></td>
			  <td><?php echo $row['w1_score22']; ?></td>
			  <td><?php echo $row['w1_score23']; ?></td>
			  <td><?php echo $row['w1_score24']; ?></td>
			  <td><?php echo $row['w1_score25']; ?></td>
			  <td><?php echo $row['w1_score26']; ?></td>
			  <td><?php echo $row['w1_score27']; ?></td>
			  <td class="tableHighlight">&nbsp;</td>
			  <td class="tableHighlight">&nbsp;</td>
			</tr>
			<tr>
			  <td><?php echo $row['w2']; ?></td>
			  <td><?php echo $row['w2_weight']; ?></td>
			  <td><?php echo $row['w2_score1']; ?></td>
			  <td><?php echo $row['w2_score2']; ?></td>
			  <td><?php echo $row['w2_score3']; ?></td>
			  <td><?php echo $row['w2_score4']; ?></td>
			  <td><?php echo $row['w2_score5']; ?></td>
			  <td><?php echo $row['w2_score6']; ?></td>
			  <td><?php echo $row['w2_score7']; ?></td>
			  <td><?php echo $row['w2_score8']; ?></td>
			  <td><?php echo $row['w2_score9']; ?></td>
			  <td class="tableHighlight"><?php echo $row['choice2']; ?></td>
			  <td><?php echo $row['w2_score10']; ?></td>
			  <td><?php echo $row['w2_score11']; ?></td>
			  <td><?php echo $row['w2_score12']; ?></td>
			  <td><?php echo $row['w2_score13']; ?></td>
			  <td><?php echo $row['w2_score14']; ?></td>
			  <td><?php echo $row['w2_score15']; ?></td>
			  <td><?php echo $row['w2_score16']; ?></td>
			  <td><?php echo $row['w2_score17']; ?></td>
			  <td><?php echo $row['w2_score18']; ?></td>
			  <td class="tableHighlight"><?php echo $row['choice3']; ?></td>
			  <td><?php echo $row['w2_score19']; ?></td>
			  <td><?php echo $row['w2_score20']; ?></td>
			  <td><?php echo $row['w2_score21']; ?></td>
			  <td><?php echo $row['w2_score22']; ?></td>
			  <td><?php echo $row['w2_score23']; ?></td>
			  <td><?php echo $row['w2_score24']; ?></td>
			  <td><?php echo $row['w2_score25']; ?></td>
			  <td><?php echo $row['w2_score26']; ?></td>
			  <td><?php echo $row['w2_score27']; ?></td>
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
		<?php
		}
		?>
      </table>
    </div>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>
