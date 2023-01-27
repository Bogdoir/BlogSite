// Console Message
console.log("%c————————————————————————", "background-color: darkred; color: red; font-size: 14px;");
console.log("%cClarity", "font-size: 45px; color: forestgreen;");
console.log("%cWelcome to the console of this page! This area is primarily designed for web developers. If you're not here to learn, please be careful when interacting with this area as it may lead to your account being hacked by malicious users.", "font-size: 17px;");
console.log("%c————————————————————————", "background-color: darkred; color: red; font-size: 14px;");

/* ### Button - Return to Top ### */
// Get the button
var mybutton = document.getElementById("TopButton");
// When the user scrolls down 20px from the top of the document, show the button.
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document.
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//// Copy to Clipboard #1
//let text1 = document.getElementById('Copy1').innerHTML;
//const copyContent1 = async () => {
//  try {
//    await navigator.clipboard.writeText(text1);
//    console.log('Content copied to clipboard');
//  } catch (err) {
//    console.error('Failed to copy: ', err);
//  }
//}
//// Copy to Clipboard #2
//let text2 = document.getElementById('Copy2').innerHTML;
//const copyContent2 = async () => {
//  try {
//    await navigator.clipboard.writeText(text2);
//    console.log('Content copied to clipboard');
//  } catch (err) {
//    console.error('Failed to copy: ', err);
//  }
//}