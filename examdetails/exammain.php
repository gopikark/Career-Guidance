<?php
include("connection.php"); 
include("exam.php");
include("exam1.php");
?>
<!DOCTYPE html>
<html>
    <head><title>exam details</title> 
    <style>
        *{
            box-sizing:border-box;
        }    
        
        body
        {
            margin:0;
            background:darkblue;
        }
        ul
        {
            margin:0;
            padding:10px;
            list-style:none;
        }
        li
        {
            float:left;
        }
        .container
        {
            max-width:1200px;
            margin:auto;
            float:center;
            background: #f2f2f2;
            overflow: auto;
        }
       .gallery
        {
            margin:5px;
            border:1px solid #ccc;
            float:left;
            width:390px;
        }
    
        .gallery img
        {
            /*margin:5px;
            border:1 px solid #ccc;*/
            width:350px;
            height:350px;
    
        }

        .desc
        {
            padding:15px;
            text-align:center;
        }
    </style>
     </head>
     <body>
        <br><br><br><br><br>
         <div class="container">
             <div class="gallery">
            <img src="images/BITS.jpg">
                     <div class="desc">BITSAT</div>
             </div>
              <div class="gallery">
                 <img src="images/vit.jpg">
                     <div class="desc">VITEE</div>
             </div>
              <div class="gallery">
                 <img src="images/jee-main.jpg">
                     <div class="desc">JEE MAIN</div>
             </div>
              <div class="gallery">
                 <img src="images/AEEE.jpg">
                     <div class="desc">AEEE</div>
             </div>
              <div class="gallery">
                 <img src="images/NATA.jpg">
                     <div class="desc">NATA</div>
             </div>
              <div class="gallery">
                 <img src="images/JEEAD.jpg">
                     <div class="desc">JEE ADVANCED</div>
             </div>
              <div class="gallery">
                 <img src="images/MAHA.jpg">
                     <div class="MAHA CET">AEEE</div>
             </div>
              <div class="gallery">
                 <img src="images/SRM.jpg">
                     <div class="desc">AEEE</div>
             </div>
              <div class="gallery">
                 <img src="images/UPSEE.jpg">
                     <div class="desc">UPSEE</div>
             </div>
         </div> 
         <footer>
             
         </footer>
     </body>
</html>