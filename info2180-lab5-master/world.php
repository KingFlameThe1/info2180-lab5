<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo (var_dump($_SERVER['REQUEST_METHOD']))

if (isset($_GET['country'])) {
	//get and sanitize input
	$inp = $_GET['country'];
	$inp = $inp.trim(" ");
	$name = filter_var($inp, FILTER_SANITIZE_STRING);
	$name = strip_tags($name);
	//echo ("<p>".$name."</p>");}/*
	
	//pull from table
	$sconn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
	$sstmt = $sconn->prepare("SELECT * FROM countries WHERE name LIKE '%$name%'");

	$sresults = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	//return results
	echo toHTML($sresults);
	
	
}//remove if comment block is moved below point A
	

function toHTML($arr){
	
}



	/*
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



<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>


$_SERVER["REQUEST_METHOD"] == "GET"


		//pull from table
	$sconn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
	$sstmt = $sconn->prepare("SELECT * FROM countries WHERE name = :cname");
	$sstmt->bindParam(':cname', $name);
	$sstmt->execute();
*/
?>