<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT state FROM college ORDER BY state ASC");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>CUSTOMIZE SEARCH</title>
</head>
<body>
   <br><br><br>
    <h2>CUSTOMIZE</h2>
    <form method="POST" name="search" action="state_search.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="state[]" multiple="multiple">
                    <option value="0" selected="selected">Select state</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['state'] . '">' . $countryResult[$key]['state'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['state'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
                        <th><strong>COLLEGE</strong></th>
                        <th><strong>BRANCH</strong></th>
                        <th><strong>EXAM</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from college";
                    $i = 0;
                    $selectedOptionCount = count($_POST['state']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['state'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE state in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['name']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['branch']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['exam']; ?> </div></td>
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>