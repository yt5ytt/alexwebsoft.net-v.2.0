<?php
  session_start();
  include("db/db.php");
  include("functions.php");
  $pageID = pageID();
  include("header.php");
 ?>
  <body>

<?php
    /*
      First comes "topLine". That is the most top line with contact info and Main Menu on the right.
      Main menu is loading from mainMenu.php file, so it is easy to change menu content on all pages.
    */
 ?>

    <div <?php if($pageID == 1){echo 'id="topLineHome"';}else{echo 'id="topLine"';} ?>>
      <div class="wrapper">
        <div id="contactInfo">
          <i class="fas fa-mobile-alt"></i> &nbsp; 381.60.599.1001 &nbsp; &nbsp; &nbsp;
          <i class="fas fa-envelope"></i> &nbsp; alexwebsoft.net@gmail.com
        </div>
        <nav>
          <?php include("mainMenu.php"); ?>
        </nav>
      </div>
    </div><!--kraj diva #topLine-->

<?php
    /*
      "TITLE BANNER" section with site title. For Homepage the ID of titleBanner section is "titleBannerHome", so that banner looks different from others pages on the site. The ID for other sites is "titleBanner"
    */
?>

    <div <?php if($pageID == 1){echo 'id="titleBannerHome"';}else{echo 'id="titleBanner"';} ?>>
      <div class="wrapper">
        <h1>alexWEBsoft.<small>net</small></h1>
        <h3>PHP Fullstack Web Developer</h3>
        <h3>Responisve Web Designer</h3>
      </div>
    </div><!--kraj diva #titleBanner-->

<?php
    /*
      MASTER section of the site. It includes all site pages, so it is designed that index.php is only page that is loading in the client's browser.
    */
?>

    <div id="master" role="main">

        <?php
          $upit = "select title,link from pages where id=$pageID";
          $rez = $db -> query($upit);
          $obj = mysqli_fetch_object($rez);
          $link = $obj -> link;
          include($link);
        ?>

    </div><!-- #master -->

<?php

  /*
    Includes footer of the site
  */

  include("footer.php");
 ?>
