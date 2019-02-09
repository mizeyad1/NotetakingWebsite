<?php
include 'connectionDB.php';
session_start();
//Insert UserNotes
$note_title=$_POST['NoteTitle'];


$note_owner=$_SESSION['username'];


$text_note= $_POST['usernote'];
$date_note = date('Y-m-d H:i:s');
//CreationOfNotes
if (isset($_POST['create_note']))
 {
  $id=$_SESSION['id'];
  $stmt = $mysqli->prepare('INSERT INTO tblnotes (note_owner_id,note_title,text_note,date_note,note_owner) VALUES (?,?,?,?,?)');
  $stmt->bind_param('sssss',$id,$note_title,$text_note,$date_note,$note_owner);
  $stmt->execute();
  echo "A Note has been created you will be redirected to Home page in 3 seconds";
  header( "refresh:3;url=homepage.php" );



}
//DeletionOfNotes
else if (isset($_POST['delete_note']))
{
  $note_title_select=$_POST['usertitlenote'];
    $stmt=$mysqli->prepare('DELETE FROM tblnotes WHERE note_title=?');
    $stmt->bind_param('s',$note_title_select);
    $stmt->execute();

    echo "A Note has been deleted! you will be redirected to Home page in 3 seconds";
    header( "refresh:3;url=homepage.php" );
}
else if (isset($_POST['update_note']))
{
  $note_title_select=$_POST['usertitlenote'];
    $stmt=$mysqli->prepare('UPDATE tblnotes SET text_note=? WHERE note_title=?');
    $stmt->bind_param('ss',$text_note,$note_title_select);
    $stmt->execute();
    echo "A Note has been updated! you will be redirected to Home Page in 3 seconds";
    header( "refresh:3;url=homepage.php" );
}
