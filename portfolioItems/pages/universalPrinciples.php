<?php 
$subFolders="../";
$title = "Hick's Law";
$banner ='<h1 id="pageTitle">Hicks Law</h1>';
include '../includes/header.php';?>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
          <div id="discussion">
            <h1 class="headingPadding">Video Presentation on Hick's Law: </h1>
            <div class="container">
                <video class="container" controls preload="auto" id="vid" src="<?php echo $subFolders; ?>videos/Codick_E_Hick'sLaw.mov"></video>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php';?>
