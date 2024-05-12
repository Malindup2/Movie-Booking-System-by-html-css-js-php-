function updateTotal()
{
    var ticketCount = parseInt(document.getElementById('ticketCount').value);
    var ticketPrice = 400; 

    var totalCost = ticketCount * ticketPrice;
    
    document.getElementById('totalCost').innerText = 'Cost : Rs.' + totalCost;
    document.getElementById('cost').value = totalCost;
}




function validateForm()
{
  var movie = document.getElementById("movie").value;
  var movieType = document.getElementById("movieType").value;
  var date = document.getElementById("date").value;
  var showTime = document.getElementById("showTime").value;
  var theatre = document.getElementById("theatre").value;
  var ticketCount = document.getElementById("ticketCount").value;
  var errorMessage = "";

  if (movie === "") {
      errorMessage += "Please select a movie.\n";
  }
  if (movieType === "") {
      errorMessage += "Please select a movie type.\n";
  }
  if (date === "") {
      errorMessage += "Please select a date.\n";
  }
  if (showTime === "") {
      errorMessage += "Please select a show time.\n";
  }
  if (theatre === "") {
      errorMessage += "Please select a theatre.\n";
  }
  if (ticketCount === "") {
      errorMessage += "Please enter the number of tickets.\n";
  }

  if (errorMessage !== "") {
      alert(errorMessage);
      return false;
  }
  return true;
}