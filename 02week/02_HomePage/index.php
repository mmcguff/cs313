<!DOCTYPE html>
<html lang="en">

<head>
  <title>CS 313 Home Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <script src="javascript.js"></script>
</head>

<body>

  <?php   

echo "<h1>Welcome Matthew McGuff's' C313 Homepage!</h1>";

echo "<p>Please check back often for updates.";
echo "<text id='w1'>Green</text> means its ready to grade. Enjoy!</p>";

echo "<div class='allLinks'>";

echo  "<button class='tablink' id='w1' onclick=\"openCity('week1', this, 'green')\" id='defaultOpen'>Week 1</button>";  
echo  "<button class='tablink' id='w2' onclick=\"openCity('week2', this, 'green')\">Week 2</button>";
echo  "<button class='tablink' id='w3' onclick=\"openCity('week3', this, 'orange')\">Week 3</button>";
echo  "<button class='tablink' id='w4' onclick=\"openCity('week4', this, 'orange')\">Week 4</button>";
echo  "<button class='tablink' id='w5' onclick=\"openCity('week5', this, 'orange')\">Week 5</button>";
echo  "<button class='tablink' id='w6' onclick=\"openCity('week6', this, 'orange')\">Week 6</button>";
echo  "<button class='tablink' id='w7' onclick=\"openCity('week7', this, 'orange')\">Week 7</button>";
echo  "<button class='tablink' id='w8' onclick=\"openCity('week8', this, 'orange')\">Week 8</button>";
echo  "<button class='tablink' id='w9' onclick=\"openCity('week9', this, 'orange')\">Week 9</button>";
echo "<button class='tablink' id='w10' onclick=\"openCity('week10', this, 'orange')\">Week 10</button>";
echo "<button class='tablink' id='w11' onclick=\"openCity('week11', this, 'orange')\">Week 11</button>";
echo "<button class='tablink' id='w12' onclick=\"openCity('week12', this, 'orange')\">Week 12</button>";
echo "<button class='tablink' id='w13' onclick=\"openCity('week13', this, 'orange')\">Week 13</button>";
echo "<button class='tablink' id='w14' onclick=\"openCity('week14', this, 'orange')\">Week 14</button>";

echo "</div>";



echo "<a href='https://helloworldcs313.herokuapp.com/index.php' ";
echo "    <div id='week1' class='tabcontent'>";
echo "    <h3>Week 1</h3>";
echo "    <p>Hello World Program. This inlcludes a links to a random quote generator</p>";
echo "    </div>";
echo "  </a>";
  
echo "  <div id='week2' class='tabcontent'>";
echo "    <h3>Week 2</h3>";
echo "    <p>Home Page. You are looking at it. Enjoy!</p>";
echo "  </div>";

echo "  <div id='week3' class='tabcontent'>";
echo "    <h3>Week 3</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week4' class='tabcontent'>";
echo "    <h3>Week 4</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "<div id='week5' class='tabcontent'>";
echo "    <h3>Week 5</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week6' class='tabcontent'>";
echo "    <h3>Week 6</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week7' class='tabcontent'>";
echo "    <h3>Week 7</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week8' class='tabcontent'>";
echo "    <h3>Week 8</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week9' class='tabcontent'>";
echo "    <h3>Week 9</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week10' class='tabcontent'>";
echo "    <h3>Week 10</h3>";
echo "   <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week11' class='tabcontent'>";
echo "    <h3>Week 11</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week12' class='tabcontent'>";
echo "    <h3>Week 12</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week13' class='tabcontent'>";
echo "    <h3>Week 13</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";

echo "  <div id='week14' class='tabcontent'>";
echo "    <h3>Week 14</h3>";
echo "    <p>Coming Soon!</p>";
echo "  </div>";


?>



  <!--
        Professional look and feel
        
        Do not use an HTML generator/layout program (e.g., DreamWeaver, FrontPage, Visual Studio designer tools). Please write the HTML for this page from scratch. You are, however, welcome to use jQuery, or Bootstrap, or other libraries if you would like.
        
        Put all styles in an external stylesheet. (No inline styles.)
        
        At least one image
        
        Something dynamic (e.g., mouse-overs, menus, on-click, on-change, etc.)
        
        Include reasonable colors, images, etc. to show your creativity and personality (but don't forget to keep it somewhat professional).
        
        No run-time errors
        -->
<!--
  <h1>Welcome Matthew McGuff's' C313 Homepage!</h1>

  <p>Please check back often for updates.
    <text id="w1">Green</text> means its ready to grade. Enjoy!</p>

<div class="allLinks">

  <button class="tablink" id="w1" onclick="openCity('week1', this, 'green')" id="defaultOpen">Week 1</button>
  <button class="tablink" id="w2" onclick="openCity('week2', this, 'green')">Week 2</button>
  <button class="tablink" id="w3" onclick="openCity('week3', this, 'orange')">Week 3</button>
  <button class="tablink" id="w4" onclick="openCity('week4', this, 'orange')">Week 4</button>
  <button class="tablink" id="w5" onclick="openCity('week5', this, 'orange')">Week 5</button>
  <button class="tablink" id="w6" onclick="openCity('week6', this, 'orange')">Week 6</button>
  <button class="tablink" id="w7" onclick="openCity('week7', this, 'orange')">Week 7</button>
  <button class="tablink" id="w8" onclick="openCity('week8', this, 'orange')">Week 8</button>
  <button class="tablink" id="w9" onclick="openCity('week9', this, 'orange')">Week 9</button>
  <button class="tablink" id="w10" onclick="openCity('week10', this, 'orange')">Week 10</button>
  <button class="tablink" id="w11" onclick="openCity('week11', this, 'orange')">Week 11</button>
  <button class="tablink" id="w12" onclick="openCity('week12', this, 'orange')">Week 12</button>
  <button class="tablink" id="w13" onclick="openCity('week13', this, 'orange')">Week 13</button>
  <button class="tablink" id="w14" onclick="openCity('week14', this, 'orange')">Week 14</button>

</div>



  <a href="https://helloworldcs313.herokuapp.com/index.php" 
    <div id="week1" class="tabcontent">
    <h3>Week 1</h3>
    <p>Hello World Program. This inlcludes a links to a random quote generator</p>
    </div>
  </a>
  
  <div id="week2" class="tabcontent">
    <h3>Week 2</h3>
    <p>Home Page. You are looking at it. Enjoy!</p>
  </div>

  <div id="week3" class="tabcontent">
    <h3>Week 3</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week4" class="tabcontent">
    <h3>Week 4</h3>
    <p>Coming Soon!</p>
  </div>

<div id="week5" class="tabcontent">
    <h3>Week 5</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week6" class="tabcontent">
    <h3>Week 6</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week7" class="tabcontent">
    <h3>Week 7</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week8" class="tabcontent">
    <h3>Week 8</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week9" class="tabcontent">
    <h3>Week 9</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week10" class="tabcontent">
    <h3>Week 10</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week11" class="tabcontent">
    <h3>Week 11</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week12" class="tabcontent">
    <h3>Week 12</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week13" class="tabcontent">
    <h3>Week 13</h3>
    <p>Coming Soon!</p>
  </div>

  <div id="week14" class="tabcontent">
    <h3>Week 14</h3>
    <p>Coming Soon!</p>
  </div>-->


</body>

</html>