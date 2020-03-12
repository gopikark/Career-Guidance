<?php
include_once('connection.php');
$query="select * from engineering" ;
$result=mysqli_query ( $connect , $query );


?>
<!DOCTYPE html>
<html>
    <head>
        <title>ENGINEERING
        </title>
        <link rel="stylesheet" href="styless/ccss.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>

        <div id="db">
            <span id="name">Course Name: </span> <span id="php"> <?php echo $row['cname']; ?>  </span>   
            <br>
            <br>
            <br>
            <span id="sid">Duration: </span> <span id="php1"> <?php echo $row['duration']; ?> </span>   
            <span><a href="/">KNOW ABOUT COLLEGES</a></span>
        
           
        
        </div>
        <?php
            }
        ?>
            <?php
            mysqli_close($connect);
            ?>
    </body>
</html>