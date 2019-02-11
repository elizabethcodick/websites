<?php 
$subFolders="../";
$title="Re-Design";
$banner='<h1 id="pageTitle">Re-Design</h1>';
include '../includes/header.php';?>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
          <div id="discussion">
            <h1 class="headingPadding">Nielsen's Heuristic Evaluation: </h1>
            <div class="indented">
                <p>Website: <a href="https://www.behance.net/" target="_blank">https://www.behance.net/</a></p>
                <b>Visibility of system status</b>
                <p>The website should be predictable and allow the users to feel in control. The navigation systems are fixed into position on the top and bottom of the page. This means that the navigation systems are always showing allowing the users to change pages without having to scroll all the way to the top or bottom of the page. Logo is in the top left corner of the webpage and with a click will take the user to the home page. A search bar is in the top right corner to allow the user to search around the website for what they are looking for. All these functions are both predictable (common happenings in websites) and functionally controllable by the user.</p>
                <b>Match between system and the real world</b>
                <p>Simple and relatable content that allows the user to feel comfortable with what they are reading/using. The content is easily understood to click on a box to see more about the art. System is similar to pinterest, instagram, and other commonly used apps and websites.</p>
                <b>User control and freedom</b>
                <p>The user can click on different forms of art and than back out of the piece by clicking “x” in the top right corner or an arrow to go to the next piece of work. If the user get lost in the website they can simply click the logo in the top left corner to go back to the main page.</p>
                <b>Consistency and standards</b>
                <p>Consistent top and bottom navigation bars. Color theme and font style stay consistent throughout the website.</p>
                <b>Error prevention</b>
                <p>There does not seem to be a lot of error prevention set up. One thing that I notice is in the search page it offers filters.</p>
                
                <b>Recognition rather than recall</b>
                <p>An example of recognition could be the menu bar in the bottom navigation system “More Behance”. A user can click on the menu and get to where they want to be. This is done by recognizing the title of icon and going to where they want to.</p>
                
                <b>Flexibility and efficiency of use</b>
                <p>The fixed navigation system make it easier to switch between pages. Also, has the menu bar to switch web pages. Other than that the website does not have much flexibility or efficiency of use.</p>
                <b>Aesthetic and minimalist design</b>
                <p>Design layout is simple and understandable. Allows the user to focus on what they came for and not have an unnecessary confusion. Content is relevant and short.</p>
                Help users recognize, diagnose, and recover from errors
                I did not notice any error messages. Error messages should be easy for the users to understand (no code talk) and a solution or suggestion should be provided.
                For example, a 404 page typically says that the page is not found or does not exist and to try again later or try another page.</p>
                <b>Help and documentation</b>
                <p>There was no help and documentation presented. There was a terms and condition link in the footer navigation. (https://www.adobe.com/legal/terms.html)</p>

                <b>Proposed Solutions</b>
                <ul>
                    <li>Adding Error Prevention: This helps the user avoid and/or fix mistakes that may make while using the website</li>
                    <li>Slips (intend to complete one action, but does another)</li>
                    <li>Offer Suggestions in search bar</li>
                    <li>Have good defaults for search</li>
                    <li>Mistakes (actions are incorrect for the situation)</li>
                    <li>Confirm Before Actions</li>
                    <li>Support Undo</li>
                    <li>Adding Flexibility: gives the user options to make them more comfortable or the website easier for them to understand</li>
                    <li>Adding a function to increase font size and/or the boxes themselves</li>
                    <li>Adding a function that will switch the view of the boxes</li>
                    <li>Add Help/Documentation: This page is there to help the users in a time of need/confusion</li>
                    <li>Things about the website</li>
                    <li>How to use the website</li>
                    <li>Tricks in the website</li>
                    <li>Information about the website</li>
                </ul>
                
        </div>
      </div>
      
      <div class="container">
          <h1 class="headingPadding">Images: </h1>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox" style="background-color: #e9ecef;">
                <div class="carousel-item active" style="background-image: url('<?php echo $subFolders; ?>images/Proposed Solutions.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/ErrorPreventionHelpDocumentation.jpg')">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Flexibility.jpg')">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php';?>
