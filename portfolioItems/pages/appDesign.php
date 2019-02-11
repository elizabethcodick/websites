<?php 
$subFolders="../";
$title="App Design";
$banner='<h1 id="pageTitle">App Design</h1>';
include '../includes/header.php';?>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
          <div id="discussion">
            <h1 class="headingPadding">Design Analysis Report: </h1>
            <div class="indented">
            <h3><u>Design Guidelines/iOS Design Themes</u></h3>
            <h5>Main concepts: quality and functionality</h5>
                    <b>Clarity</b>
                    <ul>
                        <li>Plenty of negative space</li>
                        <li>Color scheme presented</li>
                        <li>Fonts consistent</li>
                        <li>Graphics understandable</li>
                    </ul>

                    <b>Deference</b>
                    <ul>
                        <li>drop shadows to add a pop to the cards holding the quotes </li>
                        <li>content is easy to spot and read</li>
                    </ul>

                    <b>Depth</b> 
                    <ul>
                        <li>Random and categorized card would have a swipe control to move between cards</li>
                    </ul>

                    <h3><u>Design Principles</u></h3>

                    <b>Aesthetic Integrity</b>
                    <ul>
                        <li>The design focuses on the important aspect of the quotes</li>
                    </ul>

                    <b>Consistency</b>
                    <ul>
                        <li>Pages are consistency with bottom nav and  top title</li>
                        <li>The page layouts have the feel of consistent layout</li>
                    </ul>

                    <b>Direct Manipulation</b>
                    <ul>
                        <li>Swipe control</li>
                    </ul>

                    <b>Feedback</b>
                    <ul>
                        <li>While in the list of categories with a item is pushed that bg with change to a gray and the screen would swipe left</li>
                    </ul>

                    <b>Metaphors</b>
                    <ul>
                        <li>Quotes of the Day page</li>
                        <li>Notecards for the quotes (real-life example)</li>
                    </ul>

                    <b>User Control</b>
                    <ul>
                        <li>Easy for the user to be in control</li>
                        <li>Flat Navigation for the bottom nav bar</li>
                        <li>Hierarchical Navigation for the category page</li>
                    </ul>
                </div>
                <br>
                <h1 class="headingPadding">Website Content</h1>

                <b>Marquee</b>
                <ul>
                    <li>Feeling like you need some motivation, laughs, or just want to know you are not alone in your experiences. You can read different quotes of different varieties to boost your mood for the day and inspire you to do great things.</li>
                </ul>

                <b>Quotes of the Day</b>
                <ul>
                    <li>Different Quotes Display on different days</li>
                    <li>Examples:</li>
                    <li>“If you work just for money, you'll never make it, but if you love what you're doing and you always put the customer first, success will be yours.”</li>
                    <li>"When writing the story of your life, don't let anyone else hold the pen."</li>
                    <li>"A professional is someone who can do his best work when he doesn't feel like it."</li>
                </ul>

                <b>Categories</b>
                <ul>
                    <li>Label list of different categories for quotes</li>
                    <li>Examples:</li>
                    <li>Inspirational</li>
                    <li>Happy</li>
                    <li>Love</li>
                    <li>Knowledge</li>
                </ul>

                <b>Random</b>
                <ul>
                    <li>A swipe screen that displays a random list of variety of quotes</li>
                    <li>One in mock up is an intelligence or knowledge quote</li>
                </ul>

                <b>Share</b>
                <ul>
                    <li>Allows the user to submit a quote of their own. Will be reviewed, and check and possibility added to the app.</li>
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
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner" role="listbox" style="background-color: #e9ecef;">
                <div class="carousel-item active" style="background-image: url('<?php echo $subFolders; ?>images/AppDesignSketches.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/launchScreen.png')">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/QuoteOfTheday.png')">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Categories.png')">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Random.png')">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Share.png')">
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
