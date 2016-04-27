<?php include_once "common/header.php"; ?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>

<?php
$q = $_GET['pid'];
$sql = "DELETE FROM `characters` WHERE `CharID`=$q";
$result = mysqli_query($link,$sql);
echo $result;
?>