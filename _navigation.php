<div class="logo">
  <a href="http://villageofthemonks.com">
    <h2>Graignamanagh</h2>
    <!-- <img src="https://scottyzen.sirv.com/Images/v/logo.min.png" alt="Village of the Monks Logo"> -->
    <span>Village <br>of the<br> Monks</span>
  </a>
</div>

<nav>
    <ul class="desktop_nav flex flex-row list-reset justify-end float-right">
        <button id="sights_dropdown" class="hamburger hamburger--arrow" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <!-- Check for $onPage to remove nav link -->
        <?php 
            if ($onPage != 'Home') { echo '<li><a href="/">Home</a></li>';}
            if ($onPage != 'Brandon Hill') { echo '<li><a href="./brandonhill.php">Brandon Hill</a></li>';}
            if ($onPage != 'Duiske Abbey') { echo '<li><a href="./duiskeabbey.php">Duiske Abbey</a></li>';}
            if ($onPage != 'Tinnahinch Castle') { echo '<li><a href="./tinnahinchcastle.php">Tinnahinch Castle</a></li>';}
            if ($onPage != 'River Barrow') { echo '<li><a href="./riverbarrow.php">River Barrow</a></li>';}
        ?>
        <li><a href="mailto:villageofthemonks@gmail.com?subject=Village of the Monks">Contact</a></li>
    </ul>
    
</nav>

<div class="menu_dropdown">
    <ul>
        <i id="close_menu" class="fa fa-times" aria-hidden="true">
            <svg width="40" height="40" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z" fill="#1D3649"/></svg>
        </i>
        <li><a href="./index.php">Home</a></li>
        <li>
            <hr>
        </li>
        <li><a href="./brandonhill.php">Brandon Hill</a></li>
        <li><a href="./duiskeabbey.php">Duiske Abbey</a></li>
        <li><a href="./tinnahinchcastle.php">Tinnahinch Castle</a></li>
        <li><a href="./riverbarrow.php">River Barrow</a></li>
        <li>
        <hr>
        </li>
        <li><a href="mailto:villageofthemonks@gmail.com?subject=Village of the Monks">Contact</a></li>
    </ul>
  </div>