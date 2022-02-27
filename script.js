console.log("Connected");
// close the div in 5 secs
window.setTimeout("closeHelpDiv();", 5000);

function closeHelpDiv() {
  document.getElementById("top-msg").style.display = " none";
}
