<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="lib/common.css" />
		<link id="jquery-ui-css" rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/vader/jquery-ui.min.css" />
		<script src="lib/common.js"></script>
		<script src="lib/parser.js"></script>
	</head>
<body>
	<div style="text-align: right;">
		Choose a theme: <select id="themeswitcher">
		<?php
			$options = array(
				"Vader" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/vader/jquery-ui.min.css",
				"Lightness" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css",
				"Black Tie" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/black-tie/jquery-ui.min.css",
				"Blitzer" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/blitzer/jquery-ui.min.css",
				"Cupertino" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/cupertino/jquery-ui.min.css",
				"Dark Hive" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/dark-hive/jquery-ui.min.css",
				"Dot Love" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/dot-luv/jquery-ui.min.css",
				"Eggplant" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/eggplant/jquery-ui.min.css",
				"Excite Bike" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/excite-bike/jquery-ui.min.css",
				"Flick" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/flick/jquery-ui.min.css",
				"Hot Sneaks" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/hot-sneaks/jquery-ui.min.css",
				"Humanity" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/humanity/jquery-ui.min.css",
				"Le Frog" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/le-frog/jquery-ui.min.css",
				"Mint Choc" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/mint-choc/jquery-ui.min.css",
				"Overcast" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/overcast/jquery-ui.min.css",
				"Pepper Grinder" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/pepper-grinder/jquery-ui.min.css",
				"Redmond" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/redmond/jquery-ui.min.css",
				"Smoothness" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css",
				"South Street" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/south-street/jquery-ui.min.css",
				"Start" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/start/jquery-ui.min.css",
				"Sunny" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/sunny/jquery-ui.min.css",
				"Swanky Purse" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/swanky-purse/jquery-ui.min.css",
				"Trontastic" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/trontastic/jquery-ui.min.css",
				"Darkness" => "http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-darkness/jquery-ui.min.css"
			);
			$count = 1; 
			foreach($options as $name => $url) {
				echo "<option value=$url>Theme $count</option>";
				$count++;
			}
		?>
		</select>
	</div>
	<div id="tabs">
		<ul>
			<li><a href="#editor">Editor</a></li>
			<li><a href="#raw">Raw</a></li>
			<li><a href="#display">Display</a></li>
		</ul>
		<!--
		
			Editor

		-->
		<div id="editor">
			<table>
				<tr><th>IV / SSRMS</th><th>EV1</th><th>EV2</th></tr>
				<tr><td><textarea></textarea></td><td><textarea></textarea></td><td><textarea></textarea></td></tr>
				<tr><td><textarea></textarea></td><td><textarea></textarea></td><td><textarea></textarea></td></tr>
				<tr><td><textarea></textarea></td><td><textarea></textarea></td><td><textarea></textarea></td></tr>
				<tr><td><textarea></textarea></td><td><textarea></textarea></td><td><textarea></textarea></td></tr>
			</table>
			<div class="buttons">
				<button style="float:right;">Convert to Raw &rarr;</button>
			</div>
		</div>
		<!--
			
			Raw 
		
		-->
		<div id="raw">
			<textarea># Step 1 
# Step 2
This is a line without steps
Another line without steps


There are two lines above this without content
The second line has three spaces, though
#Step 3 (no space after hash)</textarea>
		  	<div class="buttons">
		  		<button style="float:left;">&larr; Convert to Editor</button>
		  		<button id="raw-to-display" style="float:right;">Render in Display &rarr;</button>
		  	</div>
		</div>
		<!--
			
			Display

		-->
	  	<div id="display">This is where the final display will be</div>
	</div>
</body>
</html><?php

