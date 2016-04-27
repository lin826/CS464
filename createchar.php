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
 
  <input type="button" name="Next" onclick="$('#createachar2').show(); $('#charcreate').hide()" value="Next">
 </div>
 <div id="createachar2" style="display:none">
 Step 2:<br/>
 Choose 3 Skills:
 "gathering","cooking","woodworking","blacksmithing","leatherworking","alchemy","architecture"<br/>
  <input type="button" name="back" onclick="$('#charcreate').show(); $('#createachar2').hide()" value="Go Back">  
  <input type="button" name="Next" onclick="$('#createachar3').show(); $('#createachar2').hide()" value="Next">
 </div>
 
 <div id="createachar3" style="display:none">
 Step 3:<br/>
 Choose a Hometown:
 "Grecca", "Valle", "Scilla", "Crescent", "Pandora"<br/>

 
  <input type="button" onclick="$('#createachar2').show(); $('#createachar3').hide()" name="back" value="Go Back">
  <input type="button" onclick="" name="submit" value="Create!">
  </div>
 </form>
 </div>
