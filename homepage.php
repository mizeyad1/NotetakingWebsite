<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css"  href="homepagecss.css?version=12">
	<title>Notetaking Website</title>
  <script type="text/javascript" src="jquery.js"> </script>

  <!--Use JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="homepagejs.js"></script>

</head>

<body>


<h1>Welcome! <?php echo $_SESSION['username'] ?></h1>
<div class="wrapper">
	<form action="homepagephp.php" method="post" id="userNoteForm">
   <input type="submit" value="CreateNote!" name="create_note" style=" display:none" >
	 <input type="submit" value="DeleteNote!" name="delete_note" style="display:none">
	 <input type="submit" value="UpdateNote!"name="update_note" style="display:none">
	 <span class="notetitle" style="display:none">Please Enter Note Title</span>	<input type="text" name="NoteTitle" style="display:none">
   <select name="usertitlenote" id="usertitlechoice" style="display:none">
     <?php
     include 'connectionDB.php';
     $stmt=$mysqli->query("SELECT note_title FROM tblnotes WHERE note_owner='".$_SESSION['username']."'");
     while($row=$stmt->fetch_assoc())
     {
       echo "<option value='".$row['note_title']."''>" . $row['note_title'] . "</option>";
     }
     ?>
   </select>
   <textarea rows="5" cols="15" name="usernote" form="userNoteForm" placeholder="Enter your Note here!"style="display:none;" ></textarea>
   </form>
	 <button type="button" onclick="btnCreateNote();" id="crtbtnId"> Create Note!</button>
	 	 <button type="button" onclick="btnUpdateNote();" id="updtbtnId"> Update Note!</button>
		 <button type="button" onclick="btnDeleteNote();" id="dltbtnId">  Delete Note!</button>

		 <button type="button" id="displaynotes">Read Notes!</button>
		 <a href="logout.php"> Log out!</a>
		 <div id="responsecontainer" align="center">
</div>
</div>






</body>
</html>
