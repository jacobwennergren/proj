
function lookup(inputString) {
   if(inputString.length <= 1) {  // if there r less than 2 characters to search,
   // hide the list div (and do not perform search)
      $('#suggestions').fadeOut(); // Hide the suggestions box
   } else {
      $.post("index.php/ajax/autosuggest", {str: ""+inputString+""}, function(data) { // Do an AJAX call
         $('#suggestions').fadeIn(); // Show the suggestions box
         $('#suggestions').html(data); // Fill the suggestions box
      });
   }
}

function logout(){
    $.post("index.php/ajax/logout"); // make a call to the ajax logout function.
    location.reload(); //reload the page after logout...
}
