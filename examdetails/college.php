
<!DOCTYPE html>
<html>
<head>
	<title> college</title>
	<style> 
    .by
        {
            background-color: skyblue;
        }
        .tb{
            border: 2px black;
            width: 1100px;
            background-color: lawngreen;
        }
        .container{
    width: 100%;
    height: 100%;
    background: #42455a; 
}
        .btn{
            width: 10%;
            height: 5%;
            font-size: 22px;
            padding: 0px;
        }
    </style>
</head>
<body class="by">
<center>
	<div class="continer">
		<form method="post" action="">
		<input type="text" name="cname" class="btn" placeholder="Enter the college Name"/>	
		<input type="submit" name="submit"  class="btn" value="SEARCH" />
		</form>

	<table align="center" border="1px" style="width:700px; line-height:50px;" class="tb">
	<tr class="tb">
        <th > NAME</th>
        <th> BRANCH </th>
        <th> LINK</th>
        <th> STATE</th>
        <th>EXAM </th>
        </tr><br>
<?php 
$host="localhost";
$user="root";
$password="";

$connect=mysqli_connect($host,$user,$password);
mysqli_select_db($connect,'examdetails');
if(isset($_POST['submit']))
{       
$name=$_POST['cname'];
$sql="select * from exams where Id='$name' ";
$result=mysqli_query($connect,$sql);

 while($rows = mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td> <?php echo $rows['name']; ?></td>
                <td> <?php echo $rows['Id']; ?></td>
                <td> <?php echo $rows['duration']; ?></td>
               
            </tr>
        <?php        
        }
}
        ?>
    </table>
    </div>
    </center>
</body>
