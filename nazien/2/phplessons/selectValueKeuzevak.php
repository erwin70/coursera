<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "fietsen";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `aankoopfietsen`";


$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query);
$result3 = mysqli_query($connect, $query);
?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <select>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
		
		<select>

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2[1];?>"><?php echo $row2[2];?></option>

            <?php endwhile;?>

        </select>
		
		<select>

            <?php while($row3 = mysqli_fetch_array($result3)):;?>

            <option value="<?php echo $row3[0];?>"><?php echo $row3[1];?></option>

            <?php endwhile;?>
			echo $query;

        </select>
        

      
    </body>

</html>