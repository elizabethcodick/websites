<?php 
$subFolders="../";
$title="Beauty";
include '../includes/header.php';
?>
      
<div id="container">

    <div class="main">
    <h1>Beauty</h1>
    <p>Beauty is important when grabbing peoples' attention. Pros to apparent usability:<p>
    <ul>
        <li>Easier to understand</li>
        <li>Well-designed products/websites shows the person cares about details</li>
        <li>"Design is the fundamental soul of a man-made creation" ~ Steve Jobs</li>
        <li>The product needs to have a certain level of appearance in order for the consumer to buy it.</li>
   </ul>

</div>
<hr> 
<div>
<h5>Change background color:</h5>
<button type="button" class="button" style="background-color:red">Red</button>
<button type="button" class="button" style="background-color:green">Green</button>
<button type="button" class="button" style="background-color:blue">Blue</button>
<button type="button" class="button" style="background-color:#D8D8D8">Clear</button>
</div>

<hr> 
<div>
<h5>Fill in the Information:</h5>
First Name: <input type="text" name="name" id="name" disabled>
<br>
<br>
Favorite Color: <input type="text" name="favColor" id="favColor" disabled>
<br>
<br>
<button type="button" class="button" onclick="">Enter</button>
</div>
<br>
<h3 id="greeting"style="margin-right:50px"><h3>

</div>
      
<?php include '../includes/footer.php';?>