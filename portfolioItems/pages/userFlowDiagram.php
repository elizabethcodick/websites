<?php 
$subFolders="../";
$title="User Flow Diagram";
$banner='<h1 id="pageTitle">User Flow Diagram</h1>';
include '../includes/header.php';?>

    <!-- Page Content -->
    <section class="py-5">      
      <div class="container">
          <h1 class="headingPadding">Images: </h1>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner" role="listbox" style="background-color: #e9ecef;">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('<?php echo $subFolders; ?>images/HW2.jpg');">
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/UserFlowDiagram.png')">
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
