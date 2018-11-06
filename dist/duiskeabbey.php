<?php include 'uploads.php'; ?> <?php 
  $title = 'Duiske Abbey';
  $image = 'https://scottyzen.sirv.com/Images/v/duiske5.jpg';
  $description = 'Duiske Abbey originated in the 13th century as the church of a Cistercian monastery, but today it is a Catholic parish church in the town of Graiguenamanagh, County Kilkenny. Where Father Gerry Byrne is the local priest.';
  include '_header.php'; 
?> <div class="wrapper"><div class="header" id="duiskeabbey-header"><div class="container"><div class="row"> <?php include '_navigation.php'; ?> </div></div></div><br><div class="container start"><div class="row"><div class="intro"><span class="section-title"><small>Est. 1204</small><h1>Duiske Abbey</h1></span><p>A National Monument, Duiske Abbey originated in the 13th century as the church of a Cistercian monastery, but today it is a Catholic parish church in the town of Graiguenamanagh, County Kilkenny. The abbey began to deteriorate in 1536 as it was suppressed, and it gradually fell into ruin. The last tragedy occurred in 1744 when the tower collapsed into the nave. It later underwent some renovations while serving as a place of worship for the Protestant Church of Ireland, returned to the Catholic community in 1812. Duiske Abbey was fully restored in the 1980s.</p><p>The abbey’s simple exterior contrasts with its elaborate interior, where visitors can see the ancient stone and high clerestory windows of the nave as well as an effigy of a 13th-century knight at the entrance. The processional door of the 13th century and early medieval floor tiles are visible and can be seen in the sunken floor to the right of the main entrance. Additionally, the churchyard is home to the Aghakiltawn and Ballyogen Crosses, dating from the 8th and 9th centuries. Built into the wall of the Abbey is a Cross Slab, also in the abbey grounds is the base of a third cross.</p><br><img src="https://scottyzen.sirv.com/Images/v/duiske-abbey-bell.png" alt="drawing of the bell and clock of the duiske abbey"></div><div class="first-image"><img id="top-image" src="https://scottyzen.sirv.com/Images/v/duiske-abbey-inside.jpg" alt="A door inside the duiske abbey"><br></div><div class="history col-sm-6 col-sm-offset-1"><span class="section-title full-width"><h1 class="display-3">A Breif History</h1></span><br><p>The Abbey was founded in 1204 by William Marshall the elder, earl of Pembroke, and was colonized with monks from Stanley in Wiltshire. The monks may not have arrived at Graiguenamanagh until 1207, but it seems that building may have begun in 1204 when the cemetery at Duiske was consecrated. In 1228 the religious community was fixed at thirty-six monks and fifty lay-brothers which were almost as large as Mellifont Abbey. The abbot of Duiske sat as a peer in parliament at that time.</p><p>The Abbey was suppressed under Henry VIII in 1536 and the last abbot, Charles O'Cavanagh, resigned his title. Monks continued to occupy it but it began to fall into ruin. Following the dissolution, the lands were awarded to James Butler of Duiske. The abbey church continued to be used as a local place of worship. The Church of Ireland re-roofed the West end after the tower collapsed into the nave in 1744. The church was returned to the Roman Catholic community in 1812 and restoration was completed in the 1980s. Currently, it is used as a parish church and music events are held there.</p><div class="mass-times"><h3><i class="fa fa-clock-o" aria-hidden="true"></i> Mass Times</h3><p>Monday - Friday <span>10am</span></p><p>Saturday <span>11am, 7.30pm (Winter 7pm)</span></p><p>Sunday <span>11am</span></p><br><br><h3><i class="fa fa-user-o" aria-hidden="true"></i> Clergy</h3><p>Parish Priest <span>V.Rev. Gerald Byrne PP.</span></p></div></div></div></div><div class="image-gallery full-width"><div class="container"><div class="row"><span class="section-title full-width"><h1 class="display-3">Images taken of Duiske Abbey</h1></span><ul> <?php
              include_once '_imageGallary.php';
              gallery('duiske-abbey');
            ?> </ul><div class="upload-button-wrapper"><p>Have you photos of the Abbey? We would love to see them.<br><a class="main-btn submit-photo">Upload Photo</a></p></div><div class="overlay"></div><div class="lightbox"></div> <?php
          include_once '_imageGallary.php';
          imageUploadForm('duiske-abbey');
        ?> </div></div></div></div> <?php include '_footer.php'; ?>