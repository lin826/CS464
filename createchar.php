<?php include_once "common/header.php"; 
include('auth.php');
?>

<script src="js/makechar.js"></script>

<div id="createachar">
 Hello <?php echo $_SESSION['username']?>!<br/>
 Create your first character:

 <form id="charcreate" action="" method="POST">

 Pick a Name: <input type="text" name="name"  value="John Q Character" required><br/>
 Gender: <input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male<br/>
 EyeColor: <br/>
 HairColor: <br/>
 SkinTone: <br/>
 HairStyle: <br/>
 Decorative Hair Style: <br/>

 Choose 3 Skills:
 "gathering","cooking","woodworking","blacksmithing","leatherworking","alchemy","architecture"<br/>
 
 
 <input type="button" name="submit" value="Create!">
 </form>
 </div>
