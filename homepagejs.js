



function btn_clicked()
{
var x=document.getElementById("text_written1");
x.value = quill.root.innerHTML;
console.log(x.value);
}




$(document).ready(function() {

    $("#displaynotes").click(function() {

      $.ajax({    //create an ajax request to displaynotes.php
        type: "GET",
        url: "displaynotes.php",
        dataType: "html",   //expect html to be returned
        success: function(response){
            $("#responsecontainer").html(response);

        }

    });
});
});




function btnCreateNote()
{
  //ShowTextArea
 document.getElementsByName('usernote')[0].style.display="block";

   //ShowNoteTitlePromopt
 document.getElementsByClassName('notetitle')[0].style.display="block";

  //ShowNoteTitle
  document.getElementsByName('NoteTitle')[0].style.display="block";
//Remove Delete Button
  document.getElementsByName('delete_note')[0].style.display="none";
  //RemoveReadButton
  document.getElementById("displaynotes").style.display="none";
   //RemoveUpdateButton
      document.getElementsByName('update_note')[0].style.display="none";
      //Remove Update button
      document.getElementById("updtbtnId").style.display="none";
      //Remove Delete button
      document.getElementById("dltbtnId").style.display="none";
      //Remove Create Button.
      document.getElementById("crtbtnId").style.display="none";
        document.getElementsByName('create_note')[0].style.display="block";


}
function btnUpdateNote()
{
  //ShowTextArea
 document.getElementsByName('usernote')[0].style.display="block";

   //ShowNoteTitlePromopt
  document.getElementsByClassName('notetitle')[0].style.display="none";

  //ShowNoteTitle
  document.getElementsByName('NoteTitle')[0].style.display="none";


  //Remove Delete Button
    document.getElementsByName('delete_note')[0].style.visibility="hidden";
    //RemoveReadButton
    document.getElementById("displaynotes").style.display="none";
    document.getElementsByName('create_note')[0].style.display="none";
        //Remove Update button
        document.getElementById("updtbtnId").style.display="none";
        //Remove Delete button
        document.getElementById("dltbtnId").style.display="none";
        //Remove Create Button.
        document.getElementById("crtbtnId").style.display="none";
document.getElementsByName('update_note')[0].style.display="block";
//Showing the Select Option
document.getElementById("usertitlechoice").style.display="block";


}
function btnDeleteNote()
{

   //ShowNoteTitlePromopt
  document.getElementsByClassName('notetitle')[0].style.display="none";
  //ShowNoteTitle
  document.getElementsByName('NoteTitle')[0].style.display="none";

    //Remove Update Button
      document.getElementsByName('update_note')[0].style.display="none";
      //RemoveReadButton
    document.getElementById("displaynotes").style.display="none";
      document.getElementsByName('create_note')[0].style.display="none";
          //Remove Update button
          document.getElementById("updtbtnId").style.display="none";
          //Remove Delete button
          document.getElementById("dltbtnId").style.display="none";
          //Remove Create Button.
          document.getElementById("crtbtnId").style.display="none";
          //Showing the delete Button
          document.getElementsByName('delete_note')[0].style.display="block";
          //Showing the Select Option
          document.getElementById("usertitlechoice").style.display="block";

}
