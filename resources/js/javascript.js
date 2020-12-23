// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

// Input Table
var row = 1;
var entry= document.getElementById("entry");
entry.addEventListener("click", displayDetails);

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Input Table
function displayDetails(){
    var name = document.getElementById("nama").value;
    var nohp = document.getElementById("nohp").value;
    var pesan = document.getElementById("pesan").value;

    if( !name || !nohp || !pesan){
        alert("Please fill all the boxes!");
        return;
    }

    var display = document.getElementById("display");

    var newRow = display.insertRow(row);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    cell1.innerHTML = name;
    cell2.innerHTML = nohp;
    cell3.innerHTML = pesan;

    row++;
}

