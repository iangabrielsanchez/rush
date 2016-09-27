// Get the modal
var modal = document.getElementById('popupPanel');

function popup(type) {
  modal.style.display = "block";
  switch(type)
  {
    case 0: // Create a new snippet
      $("#pcontent").load( "public/pages/forms/newSnippet.php");
      break;
    case 1: // View a snippet
      $("#pcontent").load( "public/pages/forms/viewSnippet.php?Snippet=" + snippet);
      break;
    case 2: // Edit a snippet
        $("#pcontent").load( "public/pages/forms/newSnippet.php?edit&Snippet="+snippet);
      break;
  }
}

// When the user clicks on <span> (x), close the modal
function closePopup() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal)
      modal.style.display = "none";
}
