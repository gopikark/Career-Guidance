<!DOCTYPE html>
<html>
<head>
<title> college</title>
</head>
<body class="by">
<center>
	<div class="continer">
       <form method="post" action="">
		<input type="text" name="cname" class="btn" placeholder="Enter the college Name"/>	
		<input type="submit" name="submit"  class="btn" value="SEARCH" />
		<br><br>
		
		<input type="checkbox" name="cs" id="c1" value="cs">
           <label for="c1"> CS </label>
           <input type="checkbox" name="mec" id="c2" value="mec">
           <label for="c2"> MEC </label>
           <input type="checkbox" name="eee" id="c3" value="eee">
           <label for="c3"> EEE </label>
           <input type="checkbox" name="ec" id="c4" value="ec">
           <label for="c4"> EC </label>
           <br>
           <input type="checkbox" name="keam" id="e1" value="keam">
           <label for="e1"> KEAM </label>
           <input type="checkbox" name="cat" id="e2" value="cat">
           <label for="e2"> CAT </label>
           <input type="checkbox" name="jeemain" id="e3" value="jee main">
           <label for="e3"> JEE MAIN </label>
           <input type="checkbox" name="aeee" id="e4" value="aeee">
           <label for="e4"> AEEE </label>
		</form>

	<table align="center" border="1px" style="width:700px; line-height:50px;" class="tb">
	<tr>
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
mysqli_select_db($connect,'project');
if(isset($_POST['submit']))
{       
$name=$_POST['cname'];
    $ncs=$_POST['cs'];
    if ('$ncs' == 'cs')
    {
$sql="select * from college where name='$name' and branch='cs'";
    }
$result=mysqli_query($connect,$sql);

 while($rows = mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td> <?php echo $rows['name']; ?></td>
                <td> <?php echo $rows['branch']; ?></td>
                <td> <?php echo $rows['link']; ?></td>
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