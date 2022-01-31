<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Image Puzzle</title>
    <link href="css1/style.css" rel="stylesheet" />
    <link href="css1/image-puzzle.css" rel="stylesheet" />
    <script src="js1/image-puzzle.js"></script>
</head>

<body>
    <div id="collage">
	<h2>
<?php
session_start();
if (!isset($_SESSION['uid'])) {
  header("Location:Login.html");
	
} else {
  echo 'Welcome -> '.$_SESSION["uid"].' ';

}
?>
	</h2>
        <h2>Image Puzzle</h2>
        <hr />
        <div id="playPanel" style="padding:5px;display:none;">
            <h3 id="imgTitle"></h3>
            <hr />
            <div style="display:inline-block; margin:auto; width:95%; vertical-align:top;">
                <ul id="sortable" class="sortable"></ul>
                <div id="actualImageBox">
                    <div id="stepBox">
                        <div>Steps:</div>
                        <div id="stepCount" class="stepCount">0</div>
                    </div>
                    <div id="timeBox">
                        Time Taken: <span id="timerPanel"></span> secs
                    </div>
                    <img id="actualImage" />
                    <div>Re-arrange to create a picture like this.</div>
                    <p id="levelPanel">
                        <input type="radio" name="level" id="easy" checked="checked" value="3" onchange="imagePuzzle.startGame(images, this.value);"
                        /> <label for="easy">Easy</label>
                        <input type="radio" name="level" id="medium" value="4" onchange="imagePuzzle.startGame(images, this.value);" />                        <label for="medium">Medium</label>
                        <input type="radio" name="level" id="hard" value="5" onchange="imagePuzzle.startGame(images, this.value);" />                        <label for="hard">Hard</label>
                    </p>
                    <div>
                        <button id="btnRule" type="button" class="btn" onclick="rules();">Rules</button>
                        <button id="newPhoto" type="button" class="btn" onclick="restart();">Another Photo</button>
                        <button id="newPhoto" type="button" class="btn" onclick="gotohome();">Go to Home</button>
                         </div>
                </div>
            </div>
        </div>
        <div id="gameOver" style="display:none;">
            <div style="background-color: #fc9e9e; padding: 5px 10px 20px 10px; text-align: center; ">
                <h2 style="text-align:center">Game Over!!</h2>
                Congratulations!! <br /> You have completed this picture.
                <br /> Steps: <span id="stepCount" class="stepCount">0</span> steps.
                <br /> Time Taken: <span class="timeCount">0</span> seconds<br />
                <div>
                    <button type="button" onclick="window.location.reload(true);">Play Again</button>
                </div>
            </div>
        </div>

        <script>
            var images = [
                { src: 'images1/london-bridge.jpg', title: 'London Bridge' },
                { src: 'images1/lotus-temple.jpg', title: 'Lotus Temple' },
                { src: 'images1/qutub-minar.jpg', title: 'Qutub Minar' },
                { src: 'images1/statue-of-liberty.jpg', title: 'Statue Of Liberty' },
                { src: 'images1/taj-mahal.jpg', title: 'Taj Mahal' }
            ];

            window.onload = function () {
                var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                imagePuzzle.startGame(images, gridSize);
            };
            function restart() {
                var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                imagePuzzle.startGame(images, gridSize);
            }
            function rules() {
                alert('Re arrange the image parts in a way that it correctly forms the picture. \nThe no. of steps taken will be counted.');
            }
			 function gotohome() {
				 window.location ="index.php";
                }
           
        </script>
    </div>
</body>
</html>