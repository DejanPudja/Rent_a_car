function myFunction() {
    var x = document.getElementById("nav");
    if (x.className == "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
} 
