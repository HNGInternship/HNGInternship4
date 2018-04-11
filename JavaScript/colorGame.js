var squareArrSize = 6;
var colors = populateColors(squareArrSize);

function randomRgb(){
	var r = Math.floor(Math.random() * 256)
	var g = Math.floor(Math.random() * 256)
	var b = Math.floor(Math.random() * 256)
	var rgb = 'rgb('+r+', '+g+', '+b+')';
	return rgb;
}

function populateColors(size){
	tempList = [];
	for(var i = 0; i < size; i++){
		tempList[i] = randomRgb();
	}
	return tempList;
}

var rgbValue = pickColor();
var targetColor = document.querySelector("#rgb");
targetColor.textContent = rgbValue;
var messageDisplay = document.getElementById("message");
var gameWon = false;
var squares = document.querySelectorAll(".square");
var header = document.getElementById("header");
var buttons = document.querySelectorAll("button");
var gameMode = document.querySelectorAll(".mode")
var reset = document.getElementById("reset");
var selected = gameMode[1];

function applySameColor(){
	for (var i = 0; i < squares.length; i++) {
		squares[i].style.backgroundColor = rgbValue;
	}
	header.style.backgroundColor = rgbValue;
}

function pickColor(){
	var random = Math.floor(Math.random() * colors.length)
	return colors[random]
}

function toggleSquares(mode){
	for (var i = 3; i < squares.length; i++) {
		squares[i].style.display = mode;
	}
}

reset.addEventListener("click", function(){
	resetSquares();
})

for (var i = 0; i < gameMode.length; i++) {
	gameMode[i].addEventListener("click", function(){
		if (gameWon === false && selected != this) {
			gameMode[0].classList.remove("selected")
			gameMode[1].classList.remove("selected")
			this.classList.add("selected")
			if (this.textContent == "EASY") {
				squareArrSize = 3;
				toggleSquares("none")
				selected = gameMode[0]
			} else {
				squareArrSize = 6;
				toggleSquares("block")
				selected = gameMode[1]
			}
			resetSquares();
		}
	})
}

function resetSquares(){
	header.style.backgroundColor = "rgb(0, 150, 200)";
	gameWon = false;
	colors = populateColors(squareArrSize);
	rgbValue = pickColor();
	targetColor.textContent = rgbValue;
	reset.textContent = "NEW COLORS"
	messageDisplay.textContent = "";

	for (var i = 0; i < squares.length; i++) {
		//add colors to squares
		squares[i].style.backgroundColor = colors[i];
		//add click listener to squares
		squares[i].addEventListener("click", function(){
			if (!gameWon) {
				if(this.style.backgroundColor == targetColor.textContent){
					messageDisplay.innerHTML = 'Correct! <i class="fa fa-check" aria-hidden="true"></i>'
					gameWon = true;
					reset.textContent = "PLAY AGAIN?"
					applySameColor();

				} else{
					messageDisplay.innerHTML = 'Try Again! <i class="fa fa-times" aria-hidden="true"></i>'
					this.style.backgroundColor = document.body.style.backgroundColor;
				}

			}
		})
	}
}

resetSquares();