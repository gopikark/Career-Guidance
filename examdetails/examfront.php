<?php
include("connection.php"); 
include("exam.php");
?>
<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 250px;
  height:auto;
    object-fit:fill;
  margin-bottom: 25px;
}

div.desc {
  padding: 15px;
  text-align:center;
}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="http://www.bits-pilani.ac.in/Uploads/University/GJCcompetitions/Winners/Nirant_2012C6PS694P_PIL.png" alt="BITSAT" width="600" height="400">
  </a>
  <div class="desc">BITSAT</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoYukje9zrwPB6GY5_pb7WtUXlVVzPGVFek_tIncnu6tWxXDuE&s" alt="AEEE" width="600" height="400">
  </a>
  <div class="desc">AEEE</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="https://www.helloadmission.com/wp-content/uploads/2018/01/jee-main.jpg" alt="JEE MAIN" width="600" height="400">
  </a>
  <div class="desc">JEE MAIN</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

</body>
</html>