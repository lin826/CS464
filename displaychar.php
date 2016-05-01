<?php include_once "common/header.php"; 
include('auth.php');
?>

<?php
	// Appearance
	$query = "SELECT * FROM `CHARACTERS` WHERE CharUserName='".$_GET['charnum']."'";
	$result = mysqli_query($link,$query);
	$array = mysqli_fetch_array($result);
	$charid = $array['CharID'];
?>

<?php
	// House and city
$sql2 = "SELECT CityName,StrucID,CharName from structures inner join characters on characters.CharID = structures.CharIDOwns where structures.CharIDOwns in (Select CharID from characters
where CharName='".$_GET['charnum']."')";
$result=$link->query($sql2);
if($result){
	$res= mysqli_fetch_row($result);
	$city= $res[0];
	$housenum= $res[1];
	$charn = $res[2];
}
else{
	
	throw new Exception(mysqli_error($link)."[ $result]");
}
?>

<div id="displaychar">
 <h2>Hello <?php echo $_SESSION['username']?>!</h2><br/>
 This is your character <?php echo $_SESSION['username']?>:<br/>
 Coins: <?php echo $array['Coins']?>, Gender: <?php echo $array['Gender']?><br/>
 <a href="house.php?cid=<?=$housenum?>"> visit your house </a> <br/>
 <a href="city.php?cid=<?=$city?>"> visit your city </a>



<table border ="1" class ="index"><tr><td>
<?php
	echo "<h4>Appearance: </h4>";
	echo "Eye Color: " .$array['EyeColor'] ."<br/>";
	echo "Hair Color: " .$array['HairColor'] ."<br/>";
	echo "Skin Tone: " .$array['SkinTone'] ."<br/>";
	echo "Hair Style: " .$array['HairStyle'] ."<br/>";
	echo "Beard Or Bangs Type: " .$array['BeardOrBangsType']."<br/>";
?></td>
<td><?php
	// Stats
	$query = "SELECT * FROM `STATS` WHERE CharIDStats='".$charid."'";
	$result = mysqli_query($link,$query);
	$array = mysqli_fetch_array($result);
	echo "<h4>Stats: </h4>";	
	echo "Skill1: ".$array['Skill1']."<br/>";
	echo "Skill2: ".$array['Skill2']."<br/>";
	echo "Skill3: " .$array['Skill3'] ."<br/>";
	echo "Attack Power: " .$array['AttackPower'] ."<br/>";
	echo "Health: " .$array['Health'] ."<br/>";
	echo "Armor: " .$array['Armor']."<br/>";
?></td>
<td><?php
	// Equipment
	$query = "SELECT * FROM `EQUIPMENT` WHERE CharIDWearing='".$charid."'";
	$result = mysqli_query($link,$query);
	echo "<h4>Equipment: </h4>";
	while($array = mysqli_fetch_array($result)){
	switch($array['EquippedInSlot']){
	case "helmet":
		$helmet = $array['EquipName']; 
		echo "Helmet: ".$helmet."<br/>"; break;
	case "chest":
		$chest = $array['EquipName']; 
		echo "Chest: ".$chest."<br/>"; break;
	case "arms":
		$arms = $array['EquipName']; 
		echo "Arms: " .$arms."<br/>"; break;
	case "legs":
		$legs = $array['EquipName']; 
		echo "Legs: " .$legs."<br/>"; break;
	case "shoes":
		$shoes = $array['EquipName']; 
		echo "Shoes: ".$shoes."<br/>"; break;
	default: echo "ERROR: ".$array['EquipName']."<br/>"; break;
	}}
?></td>
</tr>
</table>
</div>
