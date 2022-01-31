//invokes functions as soon as window loads
window.onload = function(){
	time();
	
	dateset();
	
	setInterval(function(){
		time();
		
		dateset();
		
	}, 500);
};


//gets current time and changes html to reflect it
function time(){
	var date = new Date(),
		hours = date.getHours(),
		minutes = date.getMinutes(),
		seconds = date.getSeconds();

	//make clock a 12 hour clock instead of 24 hour clock
	var amopm = ' AM';
	
	if(hours > 12)
	{
	 amopm =' PM';
	}
	
	hours = (hours > 12) ? (hours - 12) : hours;
	hours = (hours === 0) ? 12 : hours;

	//invokes function to make sure number has at least two digits
	hours = addZero(hours);
	minutes =":" + addZero(minutes);
	seconds =":" + addZero(seconds);

	//changes the html to match results
	document.getElementsByClassName('hours')[0].innerHTML = hours;
	document.getElementsByClassName('minutes')[0].innerHTML = minutes;
	document.getElementsByClassName('seconds')[0].innerHTML = seconds;
	document.getElementById("amorpm").innerHTML = amopm;
	console.log(amopm);
}

//turns single digit numbers to two digit numbers by placing a zero in front
function addZero (val){
	return (val <= 9) ? ("0" + val) : val;
}

//lights up either am or pm on clock


//lights up what day of the week it is
function dateset()
{
var cdate = new Date();
var dayt = cdate.getDate();
var daym = cdate.getMonth() + 1;
var dayy = cdate.getFullYear();
var dayh = cdate.getHours();

if (dayt<10)
{dayt="0"+dayt;}

if (daym<10)
{daym="0"+daym;}

var datec = dayt +"-"+daym +"-"+dayy;

document.getElementById("cdate").innerHTML = datec;

//if (dayh>=4)
//{
var datesl = dayt +"-"+daym +"-"+dayy;
var slideset1='<img src="PNG/uploads/'+datesl+'.png" width="100%">';
var slideset2='<img src="PNG/uploads/'+datesl+'2.png" width="100%">';
var slideset3='<img src="PNG/uploads/'+datesl+'3.png" width="100%">';    
//}
//else
//{
//var slideset1='<img src="PNG/blank.png" width="100%">';
//var slideset2='<img src="PNG/blank.png" width="100%">';
//var slideset3='<img src="PNG/blank.png" width="100%">';
//}


// document.getElementById("slideimg1").innerHTML = slideset1;
// document.getElementById("slideimg2").innerHTML = slideset2;
// document.getElementById("slideimg3").innerHTML = slideset3;
//document.getElementById("dhours").innerHTML = dayh;
}

var swiper = new Swiper('.swiper-container', {
	slidesPerView: 1,
	effect: 'fade',
	speed: 1000,
	loop: false,
	autoplay: {
		delay: 10000,
	  },
  });