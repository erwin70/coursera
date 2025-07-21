
<?php
/*
$functie = array('film');

if (isset($_GET['actie'])) {
	if (in_array($_GET['actie'], $functie)){
	function film(){
		echo 'Film';
		
		
		Gegevens uilezen uit de database #11
		
		global $MySQL;
		
		$sqlUitlezen = mysqli_query ($MySQL, "select * from 'film' order by 'filmTitel' ASC");
		$sqlAantal = mysqli_num_rows ($sqlUitlezen);
		if ($sqlAantal > 0) {
			while($sqlData = mysql_fetch_assoc($sqlUitlezen)) {
				echo $sqlData['filmTitel'];
			}
		}else{
			echo 'Sorry, ik heb niets kunnen vinden';
		}
		
	}
	echo $_GET['actie'] ();
 }else{
	 echo 'Sorry, deze functie is niet gevonden';
 }
 }
 */
 
$functie = array('film');

if (isset($_GET['actie'])){
    if (in_array($_GET['actie'], $functie)){
        function film(){
            echo 'Film';
        }
        
        echo $_GET['actie'] ();
    }else{
        echo 'Sorry, deze functie is niet gevonden';
    }
}
?>
