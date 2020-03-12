<!DOCTYPE html>
<html>
<head>
<title> college</title>
<style> 
    .by{
        background-image:url(collegeim.jpg);
         background-position: center;
        background-size: cover;
        font-family: sans-serif;
    }
    table{
    margin: auto;
    text-align: center;
    width: 1000px;
    table-layout: fixed;     
    }
    table,tr,th,td{
    padding: 20px;
    color: white;
    border: 1px solid #080808;
    border-collapse: collapse;
    font-size: 15px;
    font-family: arial;
    background: linear-gradient(top,#3c3c3c 0%,#222222 100%);
    background: -webkit-linear-gradient(top,#3c3c3c 0%,#222222 100%);
     }
    td:hover{
    background: green;
    }
  .container{
   width: 100%;
   height: 100%;
    }
    .btn{
    width: 13%;
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
			
		
		<br><br>
		
		<input type="checkbox" name="course" id="c1" value="cs">
           <label for="c1"> CS </label>
           <input type="checkbox" name="course" id="c2" value="mec">
           <label for="c2"> MEC </label>
           <input type="checkbox" name="course" id="c3" value="eee">
           <label for="c3"> EEE </label>
           <input type="checkbox" name="course" id="c4" value="ec">
           <label for="c4"> EC </label>
           <br>
           <input type="checkbox" name="course" id="e1" value="keam">
           <label for="e1"> KEAM </label>
           <input type="checkbox" name="course" id="e2" value="bitsat">
           <label for="e2"> BITSAT </label>
           <input type="checkbox" name="course" id="e3" value="jee main">
           <label for="e3"> JEE MAIN </label>
           <input type="checkbox" name="course" id="e4" value="aeee">
           <label for="e4"> AEEE </label>
           <br><br>
           <input type="submit" name="submit"  class="btn" value="SEARCH" />
		</form>

	<table align="center" border="1px" style="width:700px; line-height:50px;" class="tb">
	<tr>
        <th > NAME</th>
        <th> BRANCH </th>
        <th> STATE</th>
        <th>EXAM </th>
        </tr><br>
<?php 
$host="localhost";
$user="root";
$password="";

$connect=mysqli_connect($host,$user,$password);
mysqli_select_db($connect,'coursesdb');
if(isset($_POST['submit']))
{       
  $ncs=$_POST['course'];
    if ($ncs == 'cs')
    {
$sql="select * from college where branch='cs'";
    }
      if ($ncs == 'mec')
    {
$sql="select * from college where branch='mec'";
    }
      if ($ncs == 'ec')
    {
$sql="select * from college where branch='ec'";
    }
     if ($ncs == 'keam')
    {
$sql="select * from college where exam='keam'";
    }
     if ($ncs == 'jee main')
    {
$sql="select * from college where exam='jee main'";
    }
     if ($ncs == 'bitsat')
    {
$sql="select * from college where exam='bitsat'";
    }
    if ($ncs == 'aeee')
    {
$sql="select * from college where exam='aeee'";
    } 
    
$result=mysqli_query($connect,$sql);

 while($rows = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td> <?php echo $rows['name']; ?></td>
                <td> <?php echo $rows['branch']; ?></td>
                <td> <?php echo $rows['state']; ?></td>
                <td> <?php echo $rows['exam']; ?></td>
            </tr>
        <?php        
        }
}
        ?>
    </table>
    </div>
    </center>
</body>
</html>