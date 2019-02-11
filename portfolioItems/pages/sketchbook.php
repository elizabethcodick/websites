<?php 
$subFolders="../";
$title="Sketchbook";
$banner='<h1 id="pageTitle">Sketchbook</h1>';
include '../includes/header.php';?>

    <!-- Page Content -->
    <section class="py-5">      
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
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
              </ol>
              <div class="carousel-inner" role="listbox" style="background-color: #e9ecef;">
                <div class="carousel-item active" style="background-image: url('<?php echo $subFolders; ?>images/Sketch1.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch2.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch3.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch4.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch5.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch6.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch7.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch8.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch9.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch10.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch11.jpg');">
                </div>
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Sketch12.jpg');">
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
