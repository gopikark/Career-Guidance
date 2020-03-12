<?php
include("connection.php"); 
include("exam.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>EXAM</title>
<style>
    body
    {   
        background-color:skyblue;}
    form
    {    
        width:1000px;
        margin:auto;
        margin-top:150px;
    }
    .search{
        width:80%;
        padding:10px;
        font-size:20px;
    }
    .submit
    {
        width:15%;
        padding:10px;
        font-size:20px;
        background-color:white;
    }
    .display
    {
        width:35%;
        height:5vh;
        border:1px;
        border-radius:05px;
        padding:8px 15px 8px 15px;
        margin:10px 0px 15px 0px;
        box-shadow:1px 1px 2px 1px black;
        
        
    }
</style>
</head>
<body>
   <br><br><br><br>
    <form method="post" action="">
        <input type="text" name="Id" class ="search" placeholder="Type exam name">
        <input type="submit" name="submit" class="submit" value="Search">
    </form>
    
    <?php
   $db=mysqli_select_db($conn,'examdetails');
    if(isset($_POST['submit']))
    {
        
        $id=$_POST['Id'];
        $query="SELECT * FROM exams WHERE Id='$id' ";
        $result=mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            
     ?>    
            
            <br>
               <form action="" method="POST">
                <input readonly type="text" name="name" class="display" value="<?php echo $row['name']; ?> "/><br>
                <input readonly type="text" name="Id" class="display" value=" <?php echo $row['Id']; ?> "/><br>
                <input readonly type="text" name="duration" class="display" value=" <?php echo $row['duration']; ?> "/><br>
                <input readonly type="url" name="link" class="display"
                  value="<?php echo $row['link'];?>"/><br>
                   
                   
            </form>
        <?php        
        }
        
    }

    
    
          ?>
    
</body>
</html>