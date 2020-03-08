<div id="stayInTouch">
  <div class="wrapper">
    <div class="title">
      <h1><strong>STAY IN TOUCH</strong></h1>
    </div><!-- title -->

    <div class="social">
<?php
      $upit = "select * from social";
      $rez = $db -> query($upit);
      while($obj = msyqli_fetch_object($rez)){
        $link = $obj -> link;
        $icon = $obj -> icon;
        $title = $obj -> title;

?>
        <a href="<?php echo $link; ?>"></a>
<?php

      }
?>
    </div>
  </div>


</div>
