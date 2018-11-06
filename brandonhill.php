<?php include 'uploads.php'; ?>
<?php 
  $title = 'Brandon Hill';
  $image = 'https://scottyzen.sirv.com/Images/v/brandon-header.jpg';
  $description = 'Brandon Hill is the highest mountain in County Kilkenny.It is the termination of the chain of granitic mountains that raise from the shores of Dublin bay. The base of Brandon Hill on the side of the River Barrow and the hill running to Graig is composed of schist rock.';
  include '_header.php'; 
?>
  <div class="wrapper">
    <!-- Header Image -->
    <div class="header" id="brandonhill-header">
      <div class="container">
        <div class="row">

          <!-- Navigation -->
          <?php include '_navigation.php'; ?>

        </div>
      </div>
    </div>
    <br>
    <div class="container start">
      <div class="row">
        <div class="intro">
          <span class="section-title">
            <small>Cnoc Bhréanail</small>
            <h1>Brandon Hill</h1>
          </span>
          <p>Brandon Hill is the highest mountain in County Kilkenny. It has an elevation of 515 m (1,690 ft). It is situated 4 kilometers South-South-West of Graignamanagh, 7 kilometers east of Inistioge and 11 kilometers east of Thomastown, in the south of County Kilkenny. Brandon Hill is in the barony of Gowran and in the province of Leinster. The village of Graignamanagh is at the base of the hill.</p><p>It is the termination of the chain of granitic mountains that raise from the shores of Dublin bay. The base of Brandon Hill on the side of the <a href="riverbarrow.php">River Barrow</a> and the hill running to Graig is composed of schist rock. This blackish siliceous schistus, sometimes containing grains of quartz and when it is broken it has a shivery texture and is hard enough to scratch glass. There are a few beds of marble and limestone gravel near the foot of the mountain.</p>
        </div>

        <div class="first-image">
          <img id="top-image" src="https://scottyzen.sirv.com/Images/v/first-cross.jpg" alt="The first cross to be erected on brandon hill. Year 1954">
          <p><br></p>
        </div>
      </div> <!-- end row -->
    </div> <!-- end container -->
    <br><br>

    <!-- Brandon Hill Hiking -->
    <div class="full-width brandon-hiking">
      <div class="container">
        <div class="row">
          <div class="info">
          </div>
        </div>
      </div>
    </div>
    <div class="container trail">
      <div class="row">
        <span class="section-title full-width">
          <h1 class="display-3">Brandon Hill Loop</h1>
        </span>
        <br>
        <div class="trail-info col-sm-4">
          <strong>Trail Details</strong>
          <p>A challenging walk from Graiguenamanagh along country roadways , forestry tracks and hillside paths to the highest point in County Kilkenny</p>
          <a href="brandon-hill-loop.pdf">
            <span>
              <strong><i>
                <svg width="22" height="22" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1596 476q14 14 28 36h-472v-472q22 14 36 28zm-476 164h544v1056q0 40-28 68t-68 28h-1344q-40 0-68-28t-28-68v-1600q0-40 28-68t68-28h800v544q0 40 28 68t68 28zm160 736v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23z" fill="#FE644D"/></svg>
              </i> Download Trail Map</strong>
            </span>
          </a>
        </div>
        <div class="trail-facts col-sm-7 col-sm-offset-1">
          <strong>Direction to Trailhead</strong>
          <p>Brandon Hill loop starts in the town of Graiguenamanagh. The trailhead is at the junction on Lower Main Street.</p>
          <br>
          <ul>
            <li>
              <strong>Distance / Time</strong>
              <p><strong>18km / 7hrs</strong></p>
            </li>
            <li>
              <strong>High / Ascent</strong>
              <p><strong>520m / 600m</strong></p>
            </li>
            <li>
              <strong>Difficulty</strong>
              <p><strong>Hard</strong></p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="image-gallery full-width">
      <div class="container">
        <div class="row">
          <span class="section-title full-width">
            <h1 class="display-3">Images taken of Brandon Hill</h1>
          </span>
          <ul>
            <!-- Display images that have been uploaded -->
            <?php
              include_once '_imageGallary.php';
              gallery('brandon');
            ?>

          </ul>

          <div class="upload-button-wrapper">
            <p>Made the climb up Brandon? We would love to see some of the photos you have taking.
            <br>
            <a class="main-btn submit-photo">Upload Photo</a></p>
          </div>

          <!-- Overlay behind form -->
          <div class="overlay"></div>
          
          <!-- Display full size image here -->
          <div class="lightbox"></div>

          <!-- Upload Form -->
          <?php
            include_once '_imageGallary.php';
            imageUploadForm('brandon');
          ?>

        </div>
      </div>
    </div>
  </div><!-- End of Wrapper -->


<?php include '_footer.php'; ?>
