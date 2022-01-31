<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  margin-top:3%;
  margin-left:7%;
  float:left;
  
}

.image {
  display: block;
	width: 240px;
  height: 240px;
  color: white;
  border: solid 1px darkgreen;
  border-radius: 120px;
  font-size: 20px;
  text-decoration: none;
  text-align: center;
  align-items: center;
  justify-content: center;
  
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 240px;
  height: 240px;
  color: white;
  border: solid 1px darkgreen;
  border-radius: 120px;
  opacity: 0;
  transition: .5s ease;
  background-color: #0f0f0f;

}

.container:hover .overlay {
  opacity: 1;
  
}
.container:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

.text {
  color: white;
  font-size: 50px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<body>
<div style="margin-left: 7%;">
<div class="container">
  <a href="dog.html"><img src="dog/dog9.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Dogs</div>
  </div></a>
</div>
<div class="container">
  <a href="Cat.html"><img src="images/Burmilla.jpeg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Cats</div>
  </div></a>
</div><div class="container">
  <a href="Birds.html"><img src="images/whitethhroat.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Birds</div>
  </div></a>
</div><div class="container">
  <a href="Rabbit.html"><img src="images/rex%20rabbit.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Rabbit</div>
  </div></a>
</div><div class="container">
  <a href="Rodent.html"><img src="images/Callosciurinae.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Rodent</div>
  </div></a>
</div><div class="container">
  <a href="fish.html"><img src="images/goldfish.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Fish</div>
  </div></a>
</div>
</div>
</body>
</html>
