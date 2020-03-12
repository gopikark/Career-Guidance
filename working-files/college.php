
<!DOCTYPE html>
<html>
<head>
<title> college</title>
<style> 
    .by{
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(collegeim.jpg);
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
    input[type=checkbox]+label{
        display: flex;
        margin: 0.2em;
        
    }
    input[type=checkbox]{
        display: none;
    }
    input[type=checkbox]+label:before{
        content:"\2714";
        border: 0.1em solid #000;
        border-radius: 0.2em;
        display: inline-block;
        width: 1em;
        height: 1em;
        padding-left: 0.2em;
        padding-bottom: 0.3em;
        margin-right: 0.2em;
        vertical-align: bottom;
        color: transparent;
        transition: .2s;
    }
    input[type=checkbox]+label:active:before{
        transform: scale(0);
    }
    
    input[type=checkbox]:checked+label:before{
        background-color: black;
        border-color: black;
        color: snow;
    }
   
</style>
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
     
        <th> STATE</th>
        <th>EXAM </th>
        </tr><br>
<?php 
$host="localhost";
$user="root";
$password="";

$connect=mysqli_connect($host,$user,$password);
mysqli_select_db($connect,'college');
if(isset($_POST['submit']))
{       
$name=$_POST['cname'];
$sql="select * from college where name='$name'";
$result=mysqli_query($connect,$sql);
 while($rows = mysqli_fetch_array($result))
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