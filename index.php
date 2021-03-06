<?php ob_start("ob_gzhandler"); ?>
<?php $title = 'Graiguenamanagh';
include '_header.php'; ?>

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
                    <?php $onPage = 'Home';
                    include '_navigation.php'; ?>
                </div>
            </div>
        </div>

    </div><!-- End of Header -->

    <div class="container start">
        <div class="row">
            <div class="intro">
                <span class="section-title">
                    <small>Gráig na Manach</small>
                    <h1>Graiguenamanagh</h1>
                </span>
                <p>Gráig na Manach, meaning "Village of the Monks" is considered to be one of the most beautiful areas in the southeast of Ireland. It is located on the <a href="riverbarrow.php">River Barrow</a> at the foot of <a href="brandonhill.php">Brandon Hill</a>. It is home to <a href="duiskeabbey.php">Duiske Abbey</a>, the largest and perhaps the finest of the thirty-four medieval Cistercian abbeys in Ireland.
                </p>
                <p>
                    With its remarkable combination of mountain views, lush rolling hills, forest and river valleys, Graignamanagh offers nature lovers a plentiful feast as well as countless amenities for those keen on outdoor activities. Add to these the rich heritage of historical monuments and an abundance of leisure facilities and Graiguenamanagh presents itself as an enormously attractive venue for tourists.</p>

                <!-- Facts -->
                <div class="facts">
                    <ul>
                        <li>
                            <i>
                                <svg width="50" height="50" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1444 548l-292 292v824q0 46-33 79t-79 33-79-33-33-79v-384h-64v384q0 46-33 79t-79 33-79-33-33-79v-824l-292-292q-28-28-28-68t28-68q29-28 68.5-28t67.5 28l228 228h368l228-228q28-28 68-28t68 28q28 29 28 68.5t-28 67.5zm-324-164q0 93-65.5 158.5t-158.5 65.5-158.5-65.5-65.5-158.5 65.5-158.5 158.5-65.5 158.5 65.5 65.5 158.5z" fill="#79631A" /></svg>
                            </i>
                            <p>Population<br><small>1,543</small></p>
                        </li>
                        <li>
                            <i>
                                <svg width="140" height="140" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M524.183,297.065c-15.985-19.893-36.265-32.691-60.815-38.399c7.81-11.993,11.704-25.126,11.704-39.399
                            c0-20.177-7.139-37.401-21.409-51.678c-14.273-14.272-31.498-21.411-51.675-21.411c-18.271,0-34.071,5.901-47.39,17.703
                            c-11.225-27.028-29.075-48.917-53.529-65.667c-24.46-16.746-51.728-25.125-81.802-25.125c-40.349,0-74.802,14.279-103.353,42.83
                            c-28.553,28.544-42.825,62.999-42.825,103.351c0,2.856,0.191,6.945,0.571,12.275c-22.078,10.279-39.876,25.838-53.389,46.686
                            C6.759,299.067,0,322.055,0,347.18c0,35.211,12.517,65.333,37.544,90.359c25.028,25.033,55.15,37.548,90.362,37.548h310.636
                            c30.259,0,56.096-10.715,77.512-32.121c21.413-21.412,32.121-47.249,32.121-77.515
                            C548.172,339.757,540.174,316.952,524.183,297.065z" fill="#79631A" />
                                </svg>
                            </i>
                            <p style="text-transform: capitalize" id="weather">Weather<br><small>Raining</small></p>
                        </li>
                        <li>
                            <i>
                                <svg width="50" height="50" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5-103 385.5-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103zm274 521q-2 1-9.5 9.5t-13.5 9.5q2 0 4.5-5t5-11 3.5-7q6-7 22-15 14-6 52-12 34-8 51 11-2-2 9.5-13t14.5-12q3-2 15-4.5t15-7.5l2-22q-12 1-17.5-7t-6.5-21q0 2-6 8 0-7-4.5-8t-11.5 1-9 1q-10-3-15-7.5t-8-16.5-4-15q-2-5-9.5-11t-9.5-10q-1-2-2.5-5.5t-3-6.5-4-5.5-5.5-2.5-7 5-7.5 10-4.5 5q-3-2-6-1.5t-4.5 1-4.5 3-5 3.5q-3 2-8.5 3t-8.5 2q15-5-1-11-10-4-16-3 9-4 7.5-12t-8.5-14h5q-1-4-8.5-8.5t-17.5-8.5-13-6q-8-5-34-9.5t-33-.5q-5 6-4.5 10.5t4 14 3.5 12.5q1 6-5.5 13t-6.5 12q0 7 14 15.5t10 21.5q-3 8-16 16t-16 12q-5 8-1.5 18.5t10.5 16.5q2 2 1.5 4t-3.5 4.5-5.5 4-6.5 3.5l-3 2q-11 5-20.5-6t-13.5-26q-7-25-16-30-23-8-29 1-5-13-41-26-25-9-58-4 6-1 0-15-7-15-19-12 3-6 4-17.5t1-13.5q3-13 12-23 1-1 7-8.5t9.5-13.5.5-6q35 4 50-11 5-5 11.5-17t10.5-17q9-6 14-5.5t14.5 5.5 14.5 5q14 1 15.5-11t-7.5-20q12 1 3-17-4-7-8-9-12-4-27 5-8 4 2 8-1-1-9.5 10.5t-16.5 17.5-16-5q-1-1-5.5-13.5t-9.5-13.5q-8 0-16 15 3-8-11-15t-24-8q19-12-8-27-7-4-20.5-5t-19.5 4q-5 7-5.5 11.5t5 8 10.5 5.5 11.5 4 8.5 3q14 10 8 14-2 1-8.5 3.5t-11.5 4.5-6 4q-3 4 0 14t-2 14q-5-5-9-17.5t-7-16.5q7 9-25 6l-10-1q-4 0-16 2t-20.5 1-13.5-8q-4-8 0-20 1-4 4-2-4-3-11-9.5t-10-8.5q-46 15-94 41 6 1 12-1 5-2 13-6.5t10-5.5q34-14 42-7l5-5q14 16 20 25-7-4-30-1-20 6-22 12 7 12 5 18-4-3-11.5-10t-14.5-11-15-5q-16 0-22 1-146 80-235 222 7 7 12 8 4 1 5 9t2.5 11 11.5-3q9 8 3 19 1-1 44 27 19 17 21 21 3 11-10 18-1-2-9-9t-9-4q-3 5 .5 18.5t10.5 12.5q-7 0-9.5 16t-2.5 35.5-1 23.5l2 1q-3 12 5.5 34.5t21.5 19.5q-13 3 20 43 6 8 8 9 3 2 12 7.5t15 10 10 10.5q4 5 10 22.5t14 23.5q-2 6 9.5 20t10.5 23q-1 0-2.5 1t-2.5 1q3 7 15.5 14t15.5 13q1 3 2 10t3 11 8 2q2-20-24-62-15-25-17-29-3-5-5.5-15.5t-4.5-14.5q2 0 6 1.5t8.5 3.5 7.5 4 2 3q-3 7 2 17.5t12 18.5 17 19 12 13q6 6 14 19.5t0 13.5q9 0 20 10.5t17 19.5q5 8 8 26t5 24q2 7 8.5 13.5t12.5 9.5l16 8 13 7q5 2 18.5 10.5t21.5 11.5q10 4 16 4t14.5-2.5 13.5-3.5q15-2 29 15t21 21q36 19 55 11-2 1 .5 7.5t8 15.5 9 14.5 5.5 8.5q5 6 18 15t18 15q6-4 7-9-3 8 7 20t18 10q14-3 14-32-31 15-49-18 0-1-2.5-5.5t-4-8.5-2.5-8.5 0-7.5 5-3q9 0 10-3.5t-2-12.5-4-13q-1-8-11-20t-12-15q-5 9-16 8t-16-9q0 1-1.5 5.5t-1.5 6.5q-13 0-15-1 1-3 2.5-17.5t3.5-22.5q1-4 5.5-12t7.5-14.5 4-12.5-4.5-9.5-17.5-2.5q-19 1-26 20-1 3-3 10.5t-5 11.5-9 7q-7 3-24 2t-24-5q-13-8-22.5-29t-9.5-37q0-10 2.5-26.5t3-25-5.5-24.5q3-2 9-9.5t10-10.5q2-1 4.5-1.5t4.5 0 4-1.5 3-6q-1-1-4-3-3-3-4-3 7 3 28.5-1.5t27.5 1.5q15 11 22-2 0-1-2.5-9.5t-.5-13.5q5 27 29 9 3 3 15.5 5t17.5 5q3 2 7 5.5t5.5 4.5 5-.5 8.5-6.5q10 14 12 24 11 40 19 44 7 3 11 2t4.5-9.5 0-14-1.5-12.5l-1-8v-18l-1-8q-15-3-18.5-12t1.5-18.5 15-18.5q1-1 8-3.5t15.5-6.5 12.5-8q21-19 15-35 7 0 11-9-1 0-5-3t-7.5-5-4.5-2q9-5 2-16 5-3 7.5-11t7.5-10q9 12 21 2 8-8 1-16 5-7 20.5-10.5t18.5-9.5q7 2 8-2t1-12 3-12q4-5 15-9t13-5l17-11q3-4 0-4 18 2 31-11 10-11-6-20 3-6-3-9.5t-15-5.5q3-1 11.5-.5t10.5-1.5q15-10-7-16-17-5-43 12zm-163 877q206-36 351-189-3-3-12.5-4.5t-12.5-3.5q-18-7-24-8 1-7-2.5-13t-8-9-12.5-8-11-7q-2-2-7-6t-7-5.5-7.5-4.5-8.5-2-10 1l-3 1q-3 1-5.5 2.5t-5.5 3-4 3 0 2.5q-21-17-36-22-5-1-11-5.5t-10.5-7-10-1.5-11.5 7q-5 5-6 15t-2 13q-7-5 0-17.5t2-18.5q-3-6-10.5-4.5t-12 4.5-11.5 8.5-9 6.5-8.5 5.5-8.5 7.5q-3 4-6 12t-5 11q-2-4-11.5-6.5t-9.5-5.5q2 10 4 35t5 38q7 31-12 48-27 25-29 40-4 22 12 26 0 7-8 20.5t-7 21.5q0 6 2 16z" fill="#79631A" />
                                </svg>
                            </i>
                            <p>Coordinates<br><small>52.543925 -6.957807</small></p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- View of Graig from the Air -->
            <div class="first-image">
                <img id="top-image" class="lazy blur" src="../img/graig-air.jpg" alt="View of Graignamanagh from the air" title="View of Graignamanagh from the air">
                <p>Graignamanagh expanded beyond the Abbey as a market town, aided by the development of the Grand Canal and the navigation of the <a href="riverbarrow.php">River Barrow</a>, which ultimately connected the town with Dublin, New Ross, Waterford and Carlow. The production of wool was historically important to the town’s economy and sheep rearing remains a predominant agricultural activity in the hinterland.</p>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container -->

    <!-- Green Splash Text -->
    <div class="full-width green-river lazyBackground" style="background-image: url('../img/green-river.png')">
        <div class="container">
            <div class="row">
                <p id="green-river-text">It has been called Ireland's best kept secret and is a veritable treasure trove of varied scenery, ancient buildings, canal boating, river and hill walks, restaurants, crafts, traditional pubs and much more.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="splash">
        <div class="container">

            <!-- Brandon Hill -->
            <div class="row lazyBackground" id="brandon" style="background-image: url('../img/brandon-splash.png')">
                <div class="med-info right">
                    <span class="section-title">
                        <h2><small>Cnoc Bhréanail</small><br>Brandon Hill</h2>
                    </span>
                    <p>Brandon Hill is the highest mountain in County Kilkenny. It has an elevation of 515 m (1,690 ft). It is situated 4 kilometers South-South West of Graignamanagh, 7 kilometers east of Inistioge and 11 kilometers east of Thomastown, in the south of County Kilkenny.</p>
                    <a class="main-btn" href="brandonhill.php">Read more</a>
                </div>
            </div>

            <!-- Duiske Abbey -->
            <div class="row lazyBackground" id="duiske" style="background-image: url('../img/duiske-splash.png')">
                <div class="med-info left">
                    <span class="section-title">
                        <h2><small>Mainistir Dhubhiske</small><br>Duiske Abbey</h2>
                    </span>
                    <p>Duiske Abbey was founded by William Marshall in 1204 and is one of the first, largest and perhaps the finest of the thirty-four medieval Cistercian monasteries in Ireland. The Abbey is the parish church of Graignamanagh town and beautifully dominates the town centre.</p>
                    <a class="main-btn" href="duiskeabbey.php">Read more</a>
                </div>
            </div>

            <!-- Tinnahinch Castle -->
            <div id="tinnahinch-castle" class="row lazyBackground" style="background-image: url('../img/tinnahinch-castle-splash.png')">
                <div class="med-info right">
                    <span class="section-title">
                        <h2><small>Caisleán Tigh na hInse</small><br>Tinnahinch Castle</h2>
                    </span>
                    <p>Tinnahinch Castle was constructed in 1615 by the Duke of Ormonde. It was built to control a crossing where a wooden bridge once spanned the Barrow. The bridge linking the two settlements was originally constructed in 1797. The castle was burnt around the year 1700 and has lain that way ever since.</p>
                    <a class="main-btn" href="tinnahinchcastle.php">Read more</a>
                </div>
            </div>

            <!-- River Barrow -->
            <div class="row lazyBackground" id="riverbarrow" style="background-image: url('../img/river-splash.png')">
                <div class="med-info left">
                    <span class="section-title">
                        <h2><small>An Bhearú</small><br>River Barrow</h2>
                    </span>
                    <p>The River Barrow, historically a significant highway, was developed as a commercial navigation in the mid seventeen hundreds and Graiguenamanagh served as the main base for commercial barges operating on the river until barge traffic ceased in 1959.</p>
                    <a class="main-btn" href="riverbarrow.php">Read more</a>
                </div>
            </div>

            <!-- Small Splashes -->
            <div class="row small-info" style="display: none">
                <!-- Silaire Wood -->
                <div class="thumbnail" id="silairewood">
                    <div class="info">
                        <span class="section-title">
                            <h2><small> </small><br>Silairewood</h2>
                        </span>
                        <p style="text-align:center">Coming soon</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="container graig-feed">
            <div class="row">
                <span class="section-title full-width">
                    <small>#Graiguenamanagh</small><br>
                    <h2 class="display-2 lgfont">Graig's Instagram Feed</h2>
                </span>
                <!-- Instagram feed -->
                <ul class="instafeed text-transparent">
                    <?php include 'Instagram.php'; ?>
                </ul>
                <p class="tooltip"> <i class="fa fa-instagram fa-lg" aria-hidden="true"></i> Tag your photos with <strong>#Graiguenamanagh</strong> to see them displayed here. Your account must not be set to private.</p>
                <i class="fa fa-info-circle" aria-hidden="true"></i>
            </div>
        </div><!-- End of Instagram -->

    </div><!-- End of Wrapper -->

    <?php include '_footer.php'; ?>