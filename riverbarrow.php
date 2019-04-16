<?php ob_start("ob_gzhandler"); ?>
<?php include 'uploads.php'; ?>
<?php
$title = 'River Barrow';
$image = 'https://scottyzen.sirv.com/Images/v/river-barrow-header.jpg';
$description = 'The River Barrow is a bustling, colorful navigation. The river runs for 192 km from its source in Glenbarrow in the Slieve Bloom Mountains in the midlands of Ireland to the sea. The Barrow has long been recognized as a unique area of great natural beauty with high amenity value, traversing the counties of Laois, Kildare, Carlow, Kilkenny and Wexford.';
include '_header.php';
?>

<div class="wrapper">

    <!-- Header -->
    <div class="header" id="riverbarrow-header">

        <!-- Main Header Image -->
        <picture>
            <source srcset="../img/river-barrow-header-extra-large.jpg" media="(min-width: 1870px)">
            <source srcset="../img/river-barrow-header-large.jpg" media="(min-width: 1200px)">
            <source srcset="../img/river-barrow-header-medium.jpg" media="(min-width: 576px)">
            <img src="../img/river-barrow-header.jpg" alt="Picture taken of the River Barrow from the Tinnahinch side looking towards the Devils Eyebrow">
        </picture>

        <!-- Header Brush Strokes -->
        <div class="header-brush header-brush--alt-2"></div>

        <!-- Logo and Navigation -->
        <div class="absolute pin-t pin-l w-full">
            <div class="container mt-16">
                <div class="row">
                    <!-- Navigation -->
                    <?php $onPage = 'River Barrow';
                    include '_navigation.php'; ?>
                </div>
            </div>
        </div>

    </div><!-- End of Header -->

    <div class="container start">
        <div class="row">
            <div class="intro">
                <span class="section-title">
                    <small>An Bhearú</small>
                    <h1>River Barrow</h1>
                </span>
                <p>The River Barrow, historically a significant highway, was developed as a commercial navigation in the mid seventeen hundred and <a href="index.php">Graignamanagh</a> served as the main base for commercial barges operating on the river until barge traffic ceased in 1959.</p>
                <p>The River Barrow is a bustling, colorful navigation. The river runs for 192 km from its source in Glenbarrow in the Slieve Bloom Mountains in the midlands of Ireland to the sea. The Barrow has long been recognized as a unique area of great natural beauty with high amenity value, traversing the counties of Laois, Kildare, Carlow, Kilkenny and Wexford. The Barrow Navigation is the stretch of the River Barrow between Athy in Co. Kildare and St. Mullins in Co. Carlow. Above Athy, the Barrow Line of the Grand Canal links the Barrow Navigation to the main line of the Grand Canal at Lowtown in Co. Kildare. From there the Grand Canal crosses the country west to the River Shannon, Ireland’s longest waterways network and east to Dublin.</p>
                <p>Traveling along the Barrow Line of the Grand Canal is a tranquil experience, with a wealth of waterway heritage and history to be enjoyed.</p>
            </div>

            <div class="first-image">
                <img id="top-image" src="https://scottyzen.sirv.com/Images/v/river-barrow-air.jpg" alt="A view of graiguenamanagh with the river barrow from the air.">
                <p>The Barrow Navigation offers a different experience for the visitor being remarkably picturesque, with short man-made canal cuts by-passing shallow stretches of the river. It is a bustling river with a wealth of activities for the visitor to enjoy — from walking or cycling along the unspoiled Barrow Towpath, to catching the regular spotting of herons and kingfishers along its banks and fishing, boating and canoeing. The river is navigable south to Saint Mullins where it joins the tidal waters linking with the River Nore and leading to New Ross and the open sea. Northwards its links with the Grand Canal at Lowtown, Co. Kildare.</p>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
    <br>

    <div class="full-width">
        <div class="container">
            <div class="row">
                <div class="info">
                    <img src="img/bridge-line-art.png" alt="Drawing of the Graignamanagh bridge by Scott Kennedy">
                </div>
                <br>
                <div class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-0">
                    <span class="section-title" style="background-position: center">
                        <h1>George Semple Bridge</h1>
                    </span>
                    <p>A stone bridge existed on the site of the present bridge before 1641. Following their retreat to <a href="index.php">Graignamanagh</a> after the battle of Ballinvegga in 1643, general Thomas Preston’s Confederate troops demolished part of that bridge to prevent the English from crossing the river into Graigue, which the Confederate Army was the defending.</p>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-1">
                    <p>Some 120 years later, the “great flood” of 1763 probably destroyed the bridge. The present bridge, built in 1767, was built to the design of George Smith, a pupil of George Semple, though it has traditionally been attributed to the master himself, making it of national architectural importance.<br><br>During the 1798 Rebellion, the Crown forces blew up the arch of the bridge nearest the County Carlow side of the Barrow to prevent the Wexford rebels from entering County Kilkenny. In this way, they echoed the destruction of the previous bridge by the Confederate army 145 years earlier.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="image-gallery full-width">
        <div class="container">
            <div class="row">
                <span class="section-title full-width">
                    <h3 class="display-3"><small>Images of the</small><br>River Barrow</h3>
                </span>
                <ul>
                    <!-- Display images that have been uploaded -->
                    <?php
                    include_once '_imageGallary.php';
                    gallery('river-barrow');
                    ?>

                </ul>

                <div class="upload-button-wrapper">
                    <p>Have you walk by the River Barrow? We would love to see your photos.
                        <br>
                        <a class="main-btn submit-photo">Upload Photo</a></p>
                </div>

                <!-- Overlay behind form -->
                <div class="overlay">
                    <!-- Upload Form -->
                    <?php
                    include_once '_imageGallary.php';
                    imageUploadForm('river-barrow');
                    ?>
                </div>

                <!-- Display full size image here -->
                <div class="lightbox"></div>

            </div>
        </div>
    </div>

    <!-- Insta Feed -->
    <div class="container graig-feed">
        <div class="row">
            <span class="section-title full-width">
                <small>#RiverBarrow</small><br>
                <h2 class="display-2 lgfont">The River Barrows Instagram Feed</h2>
            </span>
            <!-- Instagram feed -->
            <ul class="instafeed text-transparent">
                <?php $search = 'RiverBarrow';
                include 'Instagram.php'; ?>
            </ul>
            <p class="tooltip"> <i class="fa fa-instagram fa-lg" aria-hidden="true"></i> Tag your photos with <strong>#RiverBarrow</strong> to see them displayed here. Your account must not be set to private.</p>
            <i class="fa fa-info-circle" aria-hidden="true"></i>
        </div>
    </div>
</div><!-- End of Wrapper -->

<?php include '_footer.php'; ?>