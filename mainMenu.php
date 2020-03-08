<ul>
  <?php
    $upit = "select * from pages";
    $rez = $db -> query($upit);
    while($obj = mysqli_fetch_object($rez)){
      $id = $obj -> id;
      $title = $obj -> title;
      $link = $obj -> link;
  ?>
  <li>
    <a <?php if($id == $pageID){echo 'class="active"';} ?> href="index.php?pageID=<?php echo $id; ?>"><?php echo $title; ?></a>
  </li>
  <?php
    }
  ?>
  <li><a class="disabled">v.2.0</a></li>
</ul>
