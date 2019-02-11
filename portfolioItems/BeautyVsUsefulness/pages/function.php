<?php 
$subFolders="../";
$title="Function";
include '../includes/blankHeader.php';
?>
      
<div id="container">

    <div class="main">
    <h1>Usefulness</h1>
    <p>Usefulness is important when keeping people interested. Pros to inherent usability:<p>
    <ul>
        <li>Serving customers</li>
        <li>Working elements (links)</li>
        <li>Minimizing frustration</li>
        <li>Fast acting</li>
        <li>Doing what is intended to do</li>
   </ul>

    </div>

<hr> 
<div>
<h5>Change background color:</h5>
<button type="button" onclick="chgColor('red')">Red</button>
<button type="button" onclick="chgColor('green')">Green</button>
<button type="button" onclick="chgColor('blue')">Blue</button>
<button type="button" onclick="chgColor('#D8D8D8')">Clear</button>
</div>

<hr> 
<div>
<h5>Fill in the Information:</h5>
First Name: <input type="text" name="name" id="name">
<br>
<br>
Favorite Color: <input type="text" name="favColor" id="favColor">
<br>
<br>
<button type="button" onclick="info()">Enter</button>
</div>
<br>
<h3 id="greeting"style="margin-right:50px"><h3>
    
</div>
      
<?php include '../includes/footer.php';?>