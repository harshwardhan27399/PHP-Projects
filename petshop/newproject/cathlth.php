<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("dog/dog2.png");
  
  /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(2px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: left;
}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
  <center><h1 style="font-size:50px">Health tips for Dogs</h1></center>
  <p><li>Feed your dog high-quality, well-balanced dog food and treats. This should be your pet's main source of nutrition. Look at the first five ingredients listed on the pet food label. These ingredients make up the majority of the food. Meat (not meat by-products) and vegetables should be the first few ingredients in the dog food. Lower down the list may be meat by-products and grains.</li></p>
  <p><li>Be careful when feeding your dog human food. Realize that certain human foods can hurt or kill a dog. Dogs bodies cant always metabolize foods like humans can so make sure your dog does not have access to these foods: grapes, raisins, chocolates, avocados, yeast dough, nuts, alcohol, onions, garlic, chives, and sugar-free gum (mainly the ingredient xylitol). These are all toxic to dogs.</li></p>
  <p><li>Maintain your dogs weight at a healthy level. A dog is considered overweight when he weighs 10-20% more than his ideal body weight. If he is 20% overweight, hes considered obese. Being obese can shorten a dogs life span by 2 years.</li></p>
  <p><li>Give your dog healthy treats. Just like in humans, snacking or treats, can add quite a few calories to a dogs daily calorie allowance. This could cause your dog to put on extra weight. Try giving your dog homemade treats, instead of store bought ones.</li></p>
  <p><li>Give your dog a constant supply of fresh water. Dogs need lots of fresh water for the body to properly work and digest food. The water should be clean and fresh, so change the water at least once a day. Clean the water bowl or bucket with dish soap and water every once. Rinse and dry the container before refilling with fresh water.</li></p>
  
</div>

</body>
</html>
