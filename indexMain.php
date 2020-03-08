<div class="aboutMe">
  <div class="wrapper wrapper-shadow">

    <div class="title">
      <h1>
        <strong>
          <?php
            if($pageID != 1){include("title.php");}else{echo "About me";}
          ?>
        </strong>
      </h1>
    </div><!-- title -->
    <div class="img">
      <img src="img/mojaSlika.jpg" alt="My Picture">
    </div>

    <p class="hello">Hello. My name is Alex. I'm from Serbia.</p>

    <p>I'm PHP FullStack responsive web developer skilled in HTML5 / CSS3 and PHP / MySQL. I'm constantly learning web technologies since January 2015. Beside skills above, I'm using JavaScript and jQuery libraries when it's needed. I'm very passionate about web development and everything related. At this moment I'm learning WordPress development, how to make my own themes and plugins in it.</p>

    <p>In near future I will develop a software that will help fast food restaurants to have online ordering and delivering food with administrative BackEnd where clients will be able to add products, change prices and ingredients. Complete software will be tailored to the user, so the user will not have to additionally learn to use this software.</p>

    <p>All of my code is completely unique. I don't use any of frameworks at this moment, but I'm very interested in Laraver PHP framework. I've bought a book about it and have plans to learn that too. I'm working in procedural PHP and core CSS3.</p>

    <p>When I'm working, I can adjust my local web server to be available, so you can monitor how your websites are growing live. Also you can follow code development on GitHub.</p>

    <p>If you have any ideas, please don't hesitate to contact me. I'm open for every opportunity.</p>

    <p>Best regards!</p>

  </div><!-- .wrapper -->

</div><!-- .aboutMe -->

<div class="technologies">
  <div class="wrapper">
    <div class="title">
      <h1><strong>USING TECHNOLOGIES</strong></h1>
    </div><!-- title -->

    <div class="techImages">
<?php
      $upit = "select * from technologies";
      $rez = $db -> query($upit);
      while($obj = mysqli_fetch_object($rez)){
        $techTitle = $obj -> title;
        $techFile = $obj -> file;
?>
        <img src="img/<?php echo $techFile; ?>" alt="<?php echo $techTitle; ?>">
<?php
      }
?>
    </div><!-- .techImages -->
  </div><!-- .wrapper -->
</div><!-- .technologies -->
