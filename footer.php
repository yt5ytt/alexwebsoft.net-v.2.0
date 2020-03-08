    <footer>
      <div id="stayInTouch">
        <div class="wrapper">
          <div class="title">
            <h1><strong>STAY IN TOUCH</strong></h1>
          </div><!-- title -->

          <div class="social">
<?php
            $upit = "select * from social";
            $rez = $db -> query($upit);
            while($obj = mysqli_fetch_object($rez)){
              $link = $obj -> link;
              $icon = $obj -> icon;
              $title = $obj -> title;

?>
            <a href="<?php echo $link; ?>"><span class="fab fa-<?php echo $icon; ?>"></span></a>&nbsp;
<?php

      }
?>

            <a href="mailto: yt5ytt@gmail.com"><span class="fas fa-envelope-square"></span></a>

          </div><!-- social -->
        </div><!-- wrapper       -->

        <div id="copywrite">
          Designed by <a href="http://alexwebsoft.net/"><b>alexWEBsoft</b></a> &copy 2020. - All rights reserved.
        </div>

      </div><!-- stayInTouch -->
    </footer>

  </body>
</html>
