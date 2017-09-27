<html>
<head>
 <title>02 Teach : Team Activity</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <script src="javascript.js"></script>

</head>
<body>
<?php 

/*
Create an HTML page with a head element that provides a title for your page, and links to external CSS and
 JavaScript files.
done

On the HTML page, create 3 divs and a button labeled "Click Me".
done

Add classes and/or ids to your divs, then use the CSS to set their font-size and background color.
Add function in your JavaScript file to alert the text "Clicked!", and have your 
button call this function when it is clicked.
done

Use CSS to make it so that hovering over any of the 3 divs causes the text to temporarily become bold.
done

Make it so that the user can specify custom colors for the first div.
To accomplish this, add a text box and another button labeled "Change color". 
Write a JavaScript function that gets invoked by clicking this button that gets the 
text from the textbox and sets the color of the first div.
*/

echo '<div id="1" class="one">div 1</div>';

echo '<input id="color" type="text" value="Yellow">';
echo '<button onclick="changeColor();">Change color</button>';

echo '<div class="two">div 2</div>';
echo '<div class="three">div 3</div>';
echo '<button onclick="getAlert();">Click Me</button>';




?> 
</body>
</html>