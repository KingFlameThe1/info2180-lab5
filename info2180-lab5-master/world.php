<?php

$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo (var_dump($_SERVER['REQUEST_METHOD']));
//echo (var_dump($_GET));
if (isset($_GET['country'])) {
	//get and sanitize input
	$inp = $_GET['country'];
	$inp = $inp.trim(" ");
	//$name = filter_var($inp, FILTER_SANITIZE_STRING);
	$name = strip_tags($inp);
	//echo ("<p>".$name."</p>");}/*
	
	if($_GET['want'] === 'country'){
		//pull from table
		$sstmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$name%'");

		$sresults = $sstmt->fetchAll(PDO::FETCH_ASSOC);
		
		//return results
		echo allCountries($sresults);
	}
	elseif($_GET['want'] === 'city'){
		$sstmt = $conn->query("SELECT * FROM cities WHERE name LIKE '%$name%'");

		$sresults = $sstmt->fetchAll(PDO::FETCH_ASSOC);

		echo allCities($sresults);
	}
	
}

function allCountries($sresults){
	$cString  = '
        <table>
            <tr>
                <th>Country Name</th>
                <th>Continent</th>
                <th>Independence Year</th>
                <th>Head of State</th>
            </tr>';
	//$string_count = 1;
	foreach($sresults as $country){
		
		$cString = $cString.'
			<tr>
				<td>' . $country['name'] . '</td>
				<td>' . $country['continent'] . '</td>
				<td>' . $country['independence_year'] . '</td>
				<td>' . $country['head_of_state'] . '</td>
			</tr>';

	}//end for each
	$cString = $cString.'
		</table>';
	
	return $cString;
}

function allCities($sresults){
	$cString  = '
        <table>
            <tr>
                <th>City Name</th>
                <th>Country Code</th>
                <th>District</th>
                <th>Population</th>
            </tr>';
	//$string_count = 1;
	foreach($sresults as $city){
		
		$cString = $cString.'
			<tr>
				<td>' . $city['name'] . '</td>
				<td>' . $city['country_code'] . '</td>
				<td>' . $city['district'] . '</td>
				<td>' . $city['population'] . '</td>
			</tr>';

	}//end for each
	$cString = $cString.'
		</table>';
	
	return $cString;
}

?>


<?php
/* 
		||----------------------THUS BEGINS THE CODE GRAVEYARD----------------------||
	
	
	function toHTML($arr){
		return '
		<ul>
			<li>'.$arr['name'].'</li>SP@CE
			<li>'.$arr['continent'].'</li>SP@CE
			<li>'.$arr['independence_year'].'</li>SP@CE
			<li>'.$arr['head_of_state'].'</li>
		</ul>';
	}
	
	
	if (empty($name)) {
		echo "";
	} else {
		$searchstmt = $conn->query("SELECT ${$name} FROM countries");
		$sresults = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		/*
		foreach ($superheroes as $superhero){
			if($superhero['alias'] == $name || $superhero['name'] == $name){
				$sname = $superhero['name'];
				$salias = $superhero['alias'];
				$sbio = $superhero['biography'];
				
			}
		}
		
	}

}//Paint A

?>



<ul>
<?php foreach ($sresults as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>


$_SERVER["REQUEST_METHOD"] == "GET"


		//pull from table
	$sconn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
	$sstmt = $sconn->prepare("SELECT * FROM countries WHERE name = :cname");
	$sstmt->bindParam(':cname', $name);
	$sstmt->execute();
	
	
	'
        <table>
            <tr>
                <th>Country Name</th>
                <th>Continent</th>
                <th>Independence Year</th>
                <th>Head of State</th>
            </tr>
            <tr>
                <td>' . $data['name'] . '</td>
                <td>' . $data['continent'] . '</td>
                <td>' . $data['independence_year'] . '</td>
                <td>' . $data['head_of_state'] . '</td>
            </tr>
        </table>
    ';
	
	
	
			if($string_count == 1){
			$cString= $cString.$country['name']."::".$country['continent']."::".$country['independence_year']."::".$country['head_of_state'];
			//$string_count == $string_count + 1;
		}//end if
		else{
			$cString= $cString."##||##".$country['name']."::".$country['continent']."::".$country['independence_year']."::".$country['head_of_state'];
			//$string_count == $string_count + 1;
		
		}//end else if
		
*/
?>