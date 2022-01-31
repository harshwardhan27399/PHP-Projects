<?php 
include('db.php');

function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
function generateUSNM($digits = 6){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
function generateTIC($digits = 5){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
function welcomemail($to,$sub,$nm,$pass,$usnm,$tpass)
{
	$usnm =$usnm ;
	$to =$to ;
	$nm =$nm ;
	$tipn =$tipn ;
		$pass =$pass ;
	$subject = $sub;
	
	$message = "
	<html>
	<head>
	<title>Registration Successfull</title>
	</head>
	<body>
	<img src='images/logo.png'/>
	<h2>Thank You </h2>". $usnm ."
	</br><h4>WELCOME to ShubhVivah .
	
	<p><h4>Shubvivah welcomes you to our wide business </h4></br><p> you had got a great chance to increase your income in a very short period of time </p>
	<p>Note Down Your Login Details</p>
	<table>
	<tr>
	<th>Full Name</th>
	<th>Email</th>
	<th>Userid</th>
	<th>Password</th>
	
	<th>Trasction Password</th>
	</tr>
	<tr>
	<td>". $nm ."</td>
	<td>". $to ."</td>
	<td>". $usnm ."</td>
	<td>". $pass ."</td>
	<td>". $tipn ."</td>
	</tr>
	</table>
	</body>
	</html>
	";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: support@shubhvivah.biz' . "\r\n";
	$headers .= 'Bcc: rohitchandane101@gmail.com' . "\r\n";
	
	mail($to,$subject,$message,$headers);
}


function welcomemails($to,$sub,$nm,$usnm,$pswd,$pin)
{
	$usnm =$usnm ;
	$to =$to ;
	$nm =$nm ;
	//$tipn =$tipn ;
	//	$pass =$pass ;
	$subject = $sub;
	
	$message = "
	<img src='http://realstime.com/d/images/logo.png'/>
	<h2>Registration Successfull ..!</h2>\r\n</br>
	<h3>Thank You \r\n<strong>". $nm ."</strong></h3>\r\n	</br><center>WELCOME to ShubhVivah. </center>\r\n
	
	Shubvivah welcomes you to our wide business  you had got a great chance to increase your income in a very short period of time 
	Please Keep Your Login Details. </br><center>Username is \r\n <strong>" .$usnm . "</strong> </center></br><center> Password is \r\n <strong> ". $pswd ." </strong></center>\r\n </br><center> Transction PIN is <strong> ". $pin ."</strong><p>Use This Details For Login Purpose you Can Start your Business By  <a href='http://realstime.com/d'>Click Here </a></p><p>For any query and help, mail us </br><strong>support@shubhvivah.biz</strong></br> Feel free to contact Us </br>Thank You.<p><p> http://shubhvivah.biz";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From:  support@realstime.com' . "\r\n";
	$headers .= 'Bcc:  rohitchandane101@gmail.com' . "\r\n";
	
	mail($to,$subject,$message ,$headers);
}





function forgtpassmails($to,$sub,$nm,$usnm,$pswd)
{
	$usnm =$usnm ;
	$to =$to ;
	$nm =$nm ;
	//$tipn =$tipn ;
	//	$pass =$pass ;
	$subject = $sub;
	
	$message = "
	<img src='http://realstime.com/d/images/logo.png'/>
	<h2>Recovery Password ..!</h2>\r\n</br>
	<h3>Thank You \r\n<strong>". $nm ."</strong></h3>\r\n	</br><center>WELCOME to ShubhVivah. </center>\r\n
	
	
	Please Keep Your Login Details. </br><center>Username is \r\n <strong>" .$usnm . "</strong> </center></br><center> Password is \r\n <strong> ". $pswd ." </strong></center>\r\n <p>Use This Details For Login Purpose you Can Access Your Pannel  <a href='http://realstime.com/d'>Click Here </a></p><p>For any query and help, mail us </br><strong>support@shubhvivah.biz</strong></br> Feel free to contact Us </br>Thank You.<p><p> http://shubhvivah.biz";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From:  support@realstime.com' . "\r\n";
	$headers .= 'Bcc:  rohitchandane101@gmail.com' . "\r\n";
	
	mail($to,$subject,$message ,$headers);
}




function checkmail($mails)
{
	$mails=$mails;
	$sql="SELECT * FROM  `register`  WHERE email='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checkusernm($mails)
{
	$mails=$mails;
	$sql="SELECT * FROM  `register`  WHERE usernm='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checkmob($mails)
{
	$mails=$mails;
	$sql="SELECT * FROM  `register`  WHERE  mobno='$mails' "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checklogin($mails,$pass)
{
	$mails=$mails;
	$pass=$pass;
	$sql="SELECT * FROM  `register`  WHERE email='$mails' AND password='$pass'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function checkloginm($mails,$pass)
{
	$mails=$mails;
	$pass=$pass;
	$sql="SELECT * FROM  `register`  WHERE mobno='$mails' AND password='$pass'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
function getmail($val1)//for Collecting the email address frm register table
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `register`  WHERE mobno='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['email'];
			
		 }
		 function getaf1($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
		
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_1'];
			
		 }
		function getaf2($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_2'];
			
		 } 
		 function getaf3($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_3'];
			
		 }
		function getaf4($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_4'];
			
		 }
		 function getaf5($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_5'];
			
		 }
		 function getaf6($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_6'];
			
		 }
		 function getaf7($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_7'];
			
		 }
		 function getaf8($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_8'];
			
		 }
		 function getaf9($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_9'];
			
		 }
		 function getaf10($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_10'];
			
		 } 
		 function getaf11($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_11'];
			
		 } 
		 function getaf12($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_12'];
			
		 } 
		 function getaf13($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_13'];
			
		 } 
		 function getaf14($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_14'];			
		 } 
		 function getaf15($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['affid_15'];			
		 }
		function getlevel($val1)//for Collecting the the affilate id
		 {
			$val1=$val1;
			$sql="SELECT * FROM  `btree`  WHERE usernm='$val1'"; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			return $row['level_pos'];			
		 }
		function selfpays($val1,$val2,$val3,$val5)//for Collecting the the affilate id
		 {
			 
			$val1=$val1;
			$unpdamt=$val2;
			$dt=$val3;
			$pdby=$val5;
			$sql="SELECT * FROM  `selfpay`  WHERE usrnm='$val1'"; 
			//echo $sql;
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$row=mysql_fetch_array($result);	
			$unpdamt1=$row['Amount_unpaid']+$unpdamt;
			$totamt=$row['tot_amt']+$unpdamt;
			
			$sql1="UPDATE selfpay SET Amount_unpaid='$unpdamt1' ,Date='$dt' ,tot_amt='$totamt',Paid_by='$pdby' WHERE usrnm='$val1'"; 
			mysql_query($sql1);
			//echo $sql1;
			return 1;			
		 }
		
		function paylogs($val1,$val2,$val3)//for Collecting the the affilate id
		 {
			 
			$val1=$val1;
			$val2=$val2;
			$val3=$val3;
			$sql="insert into pay_log(paidby,paidto,amount)values('$val1','$val2','$val3')";
			mysql_query($sql);
			//echo $sql;
			return 1;			
		 }

  ?>