//measured in seconds
var displayTime = 10;
var currentImage = 0;

var artImages = ["images/Fantasy/Fantasy Is Now by Tony Sart.jpg", "images/Fantasy/Ford Motor Co. by Julie&Boris.jpg", "images/Abstract/Master of the waters by Gheorghe Virtosu.jpg", "images/Abstract/convergence by jackson pollock.jpg" , "images/Eerie/Forest Witch by Cambion Art.jpg", "images/Landscape/lavender-season-evgeni-dinev.jpg", "images/Landscape/coast-line-erin-hanson.jpg", "Images/Pop/vespa-scooter-michael-tompsett.jpg", "Images/Pop/the-coke-machine-scott-listfield.jpg", "Images/Framed Prints/anyone-out-there-by-jake-p-johnson.jpg"];
var artNames = ["Fantasy Is Now", "Ford Motor Co.", "Master of the waters", "Convergence" , "Forest Witch", "Lavender Season", "Coast Line", "Vespa scooter", "The Coke Machine", "Anyone Out There"];
var artDescriptions = ["by Tony Sart", "by Julie&Boris", "by Gheorghe Virtosu", "by jackson pollock" , "by Cambion Art", "by Evgeni Dinev", "by Erin Hanson", "by Michael Tompsett", "by Scott Listfield", "by Jake P Johnson"];

//moving display objects
var displayImage = document.getElementById("moving-display-image");
var displayName = document.getElementById("moving-display-name");
var displayDescription = document.getElementById("moving-display-description");
var displayButtonLeft = document.getElementById("moving-display-button-left");
var displayButtonRight = document.getElementById("moving-display-button-right");

//buttons to change display
displayButtonLeft.onclick = function()
{
  changeDisplay(true);
}

displayButtonRight.onclick = function()
{
  changeDisplay(false);
}

changeDisplay();

//calls changeDisplay() in a set interval
setInterval(function(){changeDisplay(false)}, displayTime * 1000);

//changes moving display
function changeDisplay(moveLeft)
{
  currentImage += moveLeft ? -1 : 1;

  if(currentImage >= artImages.length)
  {
    currentImage = 0;
  }
  else if (currentImage < 0)
  {
    currentImage = artImages.length - 1;
  }

  displayImage.src = artImages[currentImage];
  displayImage.alt = artNames[currentImage];
  displayName.innerHTML = artNames[currentImage];
  displayDescription.innerHTML = artDescriptions[currentImage];
}

//Genres
var fantasy =
{
  genreName: "Fantasy",
  images: null,
  names: null,
  descriptions: null
}

var abstract =
{
  genreName: "Abstract",
  images: null,
  names: null,
  descriptions: null
}

var pop =
{
  genreName: "Pop",
  images: null,
  names: null,
  descriptions: null
}

var landscape =
{
  genreName: "Landscape",
  images: null,
  names: null,
  descriptions: null
}

var eerie =
{
  genreName: "Eerie",
  images: null,
  names: null,
  descriptions: null
}

var photography =
{
  genreName: "Photography",
  images: null,
  names: null,
  descriptions: null
}
