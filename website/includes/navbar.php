<!-- Navigation panel -->
<?php
if ($title == "Home") { ?>
  <nav class="main-nav transparent stick-fixed">
  <?php } else {
  ?>
    <nav class="main-nav stick-fixed">
    <?php } ?>
    <div class="full-wrapper relative clearfix">
      <!-- Logo ( * your text or image into link tag *) -->
      <div class="nav-logo-wrap local-scroll">
        <a href="index.php" class="logo">
          <img src="images/ecaft_logo.png" alt="ecaft logo" />
        </a>
      </div>
      <div class="mobile-nav">
        <i class="fa fa-bars"></i>
      </div>

      <!-- Main Menu -->
      <div class="inner-nav desktop-nav">
        <ul class="clearlist">
          <?php if ($title == "Home") { ?>
            <li><a class="active" href="index.php">Home</a></li>
          <?php } else { ?>
            <li><a href="index.php">Home</a></li>
          <?php }
        if ($title == "About") { ?>
            <li><a class="active" href="about.php">About</a></li>
          <?php
        } else { ?>
            <li><a href="about.php">About</a></li>
          <?php }
        if ($title == "Career Fair") { ?>
            <!--Item With Sub -->
            <li><a class="active" href="careerFair.php" class="mn-has-sub">Career Fair<i class="fa fa-angle-down"></i></a>
            <?php
          } else { ?>
            <li><a href="careerFair.php" class="mn-has-sub">Career Fair<i class="fa fa-angle-down"></i></a>
            <?php } ?>
            <!-- Sub -->
            <ul class="mn-sub">
              <li>
                <a href="careerFair.php">Employers</a>
              </li>
              <li>
                <a href="careerFair-student.php">Students</a>
              </li>
            </ul>
            <!-- End Sub -->
          </li>
          <!-- End Item With Sub -->

          <?php if ($title == "Showcase") { ?>
            <li><a class="active" href="showcase.php">Project Showcase</a></li>
          <?php
        } else { ?>
            <li><a href="showcase.php">Project Showcase</a></li>
          <?php }
        if ($title == "Events") { ?>
            <li><a class="active" href="events.php">Other Events</a></li>
          <?php
        } else { ?>
            <li><a href="events.php">Other Events</a></li>
          <?php } ?>

        </ul>
      </div>
      <!-- End Main Menu -->


    </div>
  </nav>
  <!-- End Navigation panel -->