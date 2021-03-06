<?php ob_start("ob_gzhandler"); ?>
<?php include 'uploads.php'; ?>
<?php
$title = 'Duiske Abbey';
$image = 'https://scottyzen.sirv.com/Images/v/duiske5.jpg';
$description = 'Duiske Abbey originated in the 13th century as the church of a Cistercian monastery, but today it is a Catholic parish church in the town of Graiguenamanagh, County Kilkenny. Where Father Gerry Byrne is the local priest.';
include '_header.php';
?>

<div class="wrapper">

    <!-- Header -->
    <div class="header" id="duiskeabbey-header">

        <!-- Main Header Image -->
        <picture>
            <source srcset="../img/duiske-abbey-header-extra-large.jpg" media="(min-width: 1600px)">
            <source srcset="../img/duiske-abbey-header-large.jpg" media="(min-width: 1100px)">
            <source srcset="../img/duiske-abbey-header-medium.jpg" media="(min-width: 576px)">
            <img src="../img/duiske-abbey-header.jpg" alt="Duiske Abbey from the graveyard.">
        </picture>

        <!-- Header Brush Strokes -->
        <div class="header-brush header-brush--alt-2"></div>

        <!-- Logo and Navigation -->
        <div class="absolute pin-t pin-l w-full">
            <div class="container mt-16">
                <div class="row">
                    <!-- Navigation -->
                    <?php $onPage = 'Duiske Abbey';
                    include '_navigation.php'; ?>
                </div>
            </div>
        </div>

    </div><!-- End of Header -->

    <div class="container start">
        <div class="row">
            <div class="intro">
                <span class="section-title">
                    <small>Est. 1204</small>
                    <h1>Duiske Abbey</h1>
                </span>
                <p>A National Monument, Duiske Abbey originated in the 13th century as the church of a Cistercian monastery, but today it is a Catholic parish church in the town of Graignamanagh, County Kilkenny. The abbey began to deteriorate in 1536 as it was suppressed, and it gradually fell into ruin. The last tragedy occurred in 1744 when the tower collapsed into the nave. It later underwent some renovations while serving as a place of worship for the Protestant Church of Ireland, returned to the Catholic community in 1812. Duiske Abbey was fully restored in the 1980s.</p>
                <p>The abbey’s simple exterior contrasts with its elaborate interior, where visitors can see the ancient stone and high clerestory windows of the nave as well as an effigy of a 13th-century knight at the entrance. The processional door of the 13th century and early medieval floor tiles are visible and can be seen in the sunken floor to the right of the main entrance. Additionally, the churchyard is home to the Aghakiltawn and Ballyogen Crosses, dating from the 8th and 9th centuries. Built into the wall of the Abbey is a Cross Slab, also in the abbey grounds is the base of a third cross.
                </p>
                <br>
                <img src="https://scottyzen.sirv.com/Images/v/duiske-abbey-bell.png" alt="drawing of the bell and clock of the duiske abbey">

            </div>
            <div class="first-image">
                <img id="top-image" class="lazy blur" src="../img/duiske-abbey-inside.jpg" alt="A door inside the duiske abbey">
                <br>
            </div>
            <div class="history col-sm-6 col-sm-offset-1">
                <span class="section-title full-width">
                    <h3 class="display-3">A Breif History</h3>
                </span>
                <br>
                <p>The Abbey was founded in 1204 by William Marshall the elder, earl of Pembroke, and was colonized with monks from Stanley in Wiltshire. The monks may not have arrived at Graiguenamanagh until 1207, but it seems that building may have begun in 1204 when the cemetery at Duiske was consecrated. In 1228 the religious community was fixed at thirty-six monks and fifty lay-brothers which were almost as large as Mellifont Abbey. The abbot of Duiske sat as a peer in parliament at that time.</p>
                <p>The Abbey was suppressed under Henry VIII in 1536 and the last abbot, Charles O'Cavanagh, resigned his title. Monks continued to occupy it but it began to fall into ruin. Following the dissolution, the lands were awarded to James Butler of Duiske. The abbey church continued to be used as a local place of worship. The Church of Ireland re-roofed the West end after the tower collapsed into the nave in 1744. The church was returned to the Roman Catholic community in 1812 and restoration was completed in the 1980s. Currently, it is used as a parish church and music events are held there.
                </p>
                <div class="mass-times">
                    <h3><span>
                            <svg width="22" height="22" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1024 544v448q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h224v-352q0-14 9-23t23-9h64q14 0 23 9t9 23zm416 352q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" fill="#67B36B" /></svg>
                        </span> Mass Times</h3>
                    <p>Monday - Friday <span>10am</span></p>
                    <p>Saturday <span>11am, 7.30pm (Winter 7pm)</span></p>
                    <p>Sunday <span>11am</span></p>
                    <br>
                    <br>
                    <h3><span>
                            <svg width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1703 478q40 57 18 129l-275 906q-19 64-76.5 107.5t-122.5 43.5h-923q-77 0-148.5-53.5t-99.5-131.5q-24-67-2-127 0-4 3-27t4-37q1-8-3-21.5t-3-19.5q2-11 8-21t16.5-23.5 16.5-23.5q23-38 45-91.5t30-91.5q3-10 .5-30t-.5-28q3-11 17-28t17-23q21-36 42-92t25-90q1-9-2.5-32t.5-28q4-13 22-30.5t22-22.5q19-26 42.5-84.5t27.5-96.5q1-8-3-25.5t-2-26.5q2-8 9-18t18-23 17-21q8-12 16.5-30.5t15-35 16-36 19.5-32 26.5-23.5 36-11.5 47.5 5.5l-1 3q38-9 51-9h761q74 0 114 56t18 130l-274 906q-36 119-71.5 153.5t-128.5 34.5h-869q-27 0-38 15-11 16-1 43 24 70 144 70h923q29 0 56-15.5t35-41.5l300-987q7-22 5-57 38 15 59 43zm-1064 2q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5t16.5-22.5l21-64q4-13-2-22.5t-20-9.5h-608q-13 0-25.5 9.5t-16.5 22.5zm-83 256q-4 13 2 22.5t20 9.5h608q13 0 25.5-9.5t16.5-22.5l21-64q4-13-2-22.5t-20-9.5h-608q-13 0-25.5 9.5t-16.5 22.5z" fill="#67B36B" /></svg>
                        </span> Clergy</h3>
                    <p>Parish Priest <span>V.Rev. Gerald Byrne PP.</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of container start -->

    <div class="image-gallery full-width">
        <div class="container">
            <div class="row">
                <span class="section-title full-width">
                    <h3 class="display-3"><small>Images taken of </small><br>Duiske Abbey</h3>
                </span>

                <ul>
                    <!-- Display images that have been uploaded -->
                    <?php
                    include_once '_imageGallary.php';
                    gallery('duiske-abbey');
                    ?>

                </ul>

                <div class="upload-button-wrapper">
                    <p>Have you photos of the Abbey? We would love to see them.
                        <br>
                        <a class="main-btn submit-photo">Upload Photo</a></p>
                </div>

                <!-- Overlay behind form -->
                <div class="overlay">
                    <!-- Upload Form -->
                    <?php
                    include_once '_imageGallary.php';
                    imageUploadForm('duiske-abbey');
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
                <small>#DuiskeAbbey</small><br>
                <h2 class="display-2 lgfont">Duiske Abbey's Instagram Feed</h2>
            </span>
            <!-- Instagram feed -->
            <ul class="instafeed text-transparent">
                <?php $search = 'DuiskeAbbey';
                include 'Instagram.php'; ?>
            </ul>
            <p class="tooltip"> <i class="fa fa-instagram fa-lg" aria-hidden="true"></i> Tag your photos with <strong>#DuiskeAbbey</strong> to see them displayed here. Your account must not be set to private.</p>
            <i class="fa fa-info-circle" aria-hidden="true"></i>
        </div>
    </div>
</div>
<!-- End of Wrapper -->

<?php include '_footer.php'; ?>