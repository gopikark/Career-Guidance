<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>FILTER</title></head>

<body>
<div class="row">
    <form class="form-horizontal" action="filter.php" method="post">
        <div class="form-group">
            <label class="col-lg-2 control-label">SORT</label>
            <div class="col-lg-4">
               
                 <input type="radio" name="sort" value="priority">priority
                  <input type="radio" name="sort" value="date">date
                 
            </div>
        </div>
        <br>
        <br>
         <div class="form-group">
            <label class="col-lg-2 control-label"></label>
            <div class="col-lg-4">
               <input type="submit" name="submit" class="btn">
                
            </div>
        </div>
        
        
    <div class="row">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th> NAME</th>
                <th> ID</th>
                <th> DURATION</th>
                <th> LINK</th> 
            </tr>
        </thead>
    </table>
       <?php
        $db=mysqli_select_db($conn,'examdetails');
        if(isset($_POST['submit'])) 
        {
            $name=$_POST['sort'];
            echo $name;
                $query="SELECT * FROM exams order by $name";
                $data=mysqli_query($conn,$query);
                if(mysqli_num_rows($data)>0){
                    while($row = mysqli_fetch_assoc($data))
                    {
        ?>
                <tr>
                   <br><br>
                    <td> <?php echo $row['Id'];?></td>
                     <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['duration'];?></td>
                       <td><?php echo $row['link'];?></td>
                       <td><?php echo $row['priority'];?></td>
                </tr>   
                <?php        
                    }
                }
             else
             {?>
             <tr>
                 <td>RECORDS NOT FOUND!!</td>
             </tr>
             <?php
            }
            
            
        }
        
        ?>
        </div>
    </form>
    </div>    
    </body>
</html>