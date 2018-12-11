<?php ob_start("ob_gzhandler"); ?>
<?php $title = 'Graiguenamanagh'; include '_header.php'; ?>

  <div class="wrapper">
    
    <!-- Header -->
    <div class="header">

        <!-- Main Header Image -->
        <picture>
            <source srcset="../img/main-header-extra-large.jpg" media="(min-width: 1870px)">
            <source srcset="../img/main-header-large.jpg" media="(min-width: 1200px)">
            <source srcset="../img/main-header-medium.jpg" media="(min-width: 576px)">
            <img src="../img/main-header.jpg" alt="Graiguenamanagh bridge over the River Barrow with the Duiske Abbey in the background">
        </picture>

        <!-- Header Brush Strokes -->
        <div class="header-brush"></div>

        <!-- Logo and Navigation -->
        <div class="absolute pin-t pin-l w-full">
            <div class="container mt-16">
                <div class="row">
                    <!-- Navigation -->
                    <?php $onPage = 'Home'; include '_navigation.php'; ?>
                </div>
            </div>
        </div>

    </div><!-- End of Header -->
    
    <br>
    <div class="container start">
        <div class="row">
            <div style="margin:10% 0 20%">
                <br>
                <h1>Page Not Found</h1>
                <p>Sorry, but the page you were trying to view does not exist.</p>
                <a href="/">Return home</a>
                <br>
            </div>
        </div>
    </div>
    <div class="bottom-brush-stroke">
    </div>
</div> 
    
<?php include '_footer.php'; ?>