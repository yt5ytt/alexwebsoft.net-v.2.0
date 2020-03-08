<?php
  $upit = "select title from pages where id=$pageID";
  $res = $db -> query($upit);
  $obj = mysqli_fetch_object($res);
  $title = $obj -> title;
  echo $title;
?>
