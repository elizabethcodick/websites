<?php 
$subFolders="../";
$title="The Ambiguity Effect";
$banner='<h1 id="pageTitle">The Ambiguity Effect</h1>';
include '../includes/header.php';?>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
          <div id="discussion">
            <h1 class="headingPadding">Discussion: </h1>

            <p class="indented">Ambiguity is defined as a difficult person or situation, or in another word unclear. 
                The ambiguity effect is a cognitive bias in which a person's decision making is affected
                 by missing information. In other words, people tend to prefer having to decide something
                  when the options have probabilities of success. In that case, that person can choose the
                   best option with the best probability of working in their favor. </p>
                <br>
                <p class="indented">A common example of this effect is similar to a probability problem in which there are 
                  two options. The first is known and the second is unknown. Most people would stick to the 
                  known factor even if the unknown could have a better probability for their goal. That in 
                  mind, consider the duck game from carnivals. Each duck has a number under them and if you 
                  pick the right one you can win the big prize. There are three different numbers 1, 2, and 3.
                   There are 30 ducks in total. There are 10 number ones and the remaining 20 are either 2 or
                    3 with all combinations of 2 and 3 being equally likely. The first option is to pick a 
                    number 1 and the second is to pick a number 3 to win. The first option is the known,
                     there are 10 out of 30 duck that can be chosen to win the game. While the second option
                      is the unknown, there could be more or less of a possibility to pick up a 3 rather 
                      than a 1. People tend to stick with what they know rather than what they do not know 
                      for a sense of security, thus steering away from the ambiguities choice or choice number 2.</p>
                
                <br><br>
                
                <p class="indented">References:
                <ul class="indented">
                    <li>https://www.urbandictionary.com/define.php?term=ambiguity</li>
                
                    <li>https://en.wikipedia.org/wiki/Ambiguity_effect</li>
                    
                    <li>https://thedecisionlab.com/bias/ambiguity-effect/</li>
                </ul>
                </p>
            </p>
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
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('<?php echo $subFolders; ?>images/AmbiguityEffect_Money.png');">
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/AmbiguityEffect_Puzzle.png')">
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('<?php echo $subFolders; ?>images/Exercise1b.jpg')">
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
