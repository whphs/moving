// Get the modal
var modal = document.getElementById("myModal");
var timeModal = document.getElementById("timeModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var timeBtn = document.getElementById("myTimeBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
if(btn != null)
{
  btn.onclick = function() {
   modal.style.display = "block";
  }
  span.onclick = function(){
    modal.style.display = "none";
  }
}
if(timeBtn != null)
{  
  timeBtn.onclick = function() {
    timeModal.style.display = "block";
  }

}
span.onclick = function() {
  timeModal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal

// span.onclick = function() {

//   modal.style.display = "none";
//   timeModal.style.display = "none";  
// }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == timeModal) {
    timeModal.style.display = "none";
  }

}