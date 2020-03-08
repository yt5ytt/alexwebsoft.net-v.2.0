<?php
  function pageID(){
    if(@$_GET['pageID'] == ""){
      $pageID = 1;
    }else{
      $pageID = $_GET['pageID'];
    }

    return $pageID;
  }
?>
