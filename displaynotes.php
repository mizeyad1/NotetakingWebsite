<?php
session_start();
include 'connectionDB.php';
echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">Note Title</font> </td>
          <td> <font face="Arial">Note Text</font> </td>
          <td> <font face="Arial">Note Date</font> </td>
      </tr>';
$stmt=$mysqli->query("SELECT note_title,text_note,date_note FROM tblnotes WHERE note_owner='".$_SESSION['username']."'");
while($row=$stmt->fetch_assoc())
{
        $field1name = $row["note_title"];
        $field2name = $row["text_note"];
        $field3name = $row["date_note"];
  echo '<tr>
          <td>'.$field1name.'</td>
          <td>'.$field2name.'</td>
          <td>'.$field3name.'</td>
      </tr>';
    }


?>
