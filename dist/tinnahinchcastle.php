<?php include 'uploads.php'; ?> <?php 
  $title = 'Tinnahinch Castle';
  $image = 'https://scottyzen.sirv.com/Images/v/tinnahinch-castle-header.jpg';
  $description = 'Tinnahinch Castle was constructed in 1615 by James Butler the Duke of Ormonde. It was built to control a crossing where a wooden bridge once spanned the Barrow. Today the castle stands in ruins on the Carlow side of the river Barrow';
  include '_header.php'; 
?> <div class="wrapper"><div class="header" id="tinnahinchcastle-header"><div class="container"><div class="row"> <?php include '_navigation.php'; ?> </div></div></div><div class="container start"><div class="row"><div class="intro"><span class="section-title"><small>Caisleán Tigh na hInse</small><h1>Tinnahinch Castle</h1></span><p>Tinnahinch Castle was constructed in 1615 by James Butler the Duke of Ormonde. It was built to control a crossing where a wooden bridge once spanned the Barrow. The bridge linking the two settlements was originally constructed in 1797. The castle was burnt around the year 1700 and has lain that way ever since.</p><p>Tinnahinch Castle, beside the lock, was a Butler castle built to defend the ford. In the 1540s a wooden bridge was built across the river here and the castle was an important defensive position in the prolonged struggle between the Butlers and the Kavanaghs. The castle was further strengthened in the seventeenth century and was held by the Confederates in the Cromwellian wars</p></div><div class="first-image"><img id="top-image" src="https://scottyzen.sirv.com/Images/v/tinnahinch-castle-sketch.png" alt="two sketches of Tinnahinch castle from years ago."><br></div></div><br><div class="container"><div class="row"><span class="section-title full-width" style="background-position: center bottom"><h2>Ancient Castle to be Demolished</h2></span><p>At Tinnahinch (Tighe-na-hinse, the House of the Island or River Meadow), Co. Carlow, there stands the ruins of an old castle, a picturesque object beside the banks of the Barrow. Like all the other ancient monuments in the country it too has its painful history. Built in the 16th century it has been known since as the Castle of the Butlers. It is of ancient design, the only entrance to it was a small door in an angle in the western side which was defended by a bartizan at the top of the building. At the Eastern corner nearest to the river was a Barbican or watch tower constructed on corbels projecting from the walls by which the northern and eastern side was defended.</p><p class="italic">Many tales of lawless wickedness and wild romances in which the owners of the castle bore a leading part are still related in the neighbourhood. It is told that Butler who resided in the castle was born in England. Being brought to this country when an infant he was reared by a family called Archdexin residing at Raheen, about two miles from Graig—na Managh. When he reached London he was in great favour with the Queen from whom he received grants of land in the Counties Carlow and Kilkenny. The story goes that he constructed at the top of castle an immense reservoir for water, capable of holding as much as would flood the castle, which having filled he invited a large number of the neighbouring Irish amounting to 700 to dinner. When they had assembled the means of egress was secured and Butler going to the top of the castle discharged the contents of the reservoir, by which means they were all drowned.</p><p>Tradition tells us, and it is said locally, there is never an assembly, fair or meeting in Graigue but the day is sure to come wet. The history of this structure doleful as it may remain, but the ruins of the castle are to be no more, as they are to be demolished by the Grand Canal Company, they being considered dangerous.<br>The prediction by this newspaper never came to pass, and Tinnahinch Castle remains a picturesque object beside the banks of the Barrow.</p><p><small><strong>This article is from an old newspaper found under the floorboards of a local house – Date unknown. *</strong></small></p></div></div></div><br><div class="image-gallery full-width"><div class="container"><div class="row"><span class="section-title full-width"><h1 class="display-3">Images taken of Tinnahinch Castle</h1></span><ul> <?php
              include_once '_imageGallary.php';
              gallery('tinnahinch-castle');
            ?> </ul><div class="upload-button-wrapper"><p>We would love to see more photos of Tinnahinch Castle.<br><a class="main-btn submit-photo">Upload Photo</a></p></div><div class="overlay"></div><div class="lightbox"></div> <?php
            include_once '_imageGallary.php';
            imageUploadForm('tinnahinch-castle');
          ?> </div></div></div></div> <?php include '_footer.php'; ?>