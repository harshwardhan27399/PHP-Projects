<?php
	include_once('check.inc.php');
?>
<?php
	function get_date($date)	{
		$year = substr($date, 0, 4);
		$month = substr($date, 5, 2);
		if($month == 1)	{
			$month = "Jan";
		}
		if($month == 2)	{
			$month = "Feb";
		}
		if($month == 3)	{
			$month = "Mar";
		}
		if($month == 4)	{
			$month = "Apr";
		}
		if($month == 5)	{
			$month = "May";
		}
		if($month == 6)	{
			$month = "Jun";
		}
		if($month == 7)	{
			$month = "Jul";
		}
		if($month == 8)	{
			$month = "Aug";
		}
		if($month == 9)	{
			$month = "Sep";
		}
		if($month == 10)	{
			$month = "Oct";
		}
		if($month == 11)	{
			$month = "Nov";
		}
		if($month == 12)	{
			$month = "Dec";
		}
		$day = substr($date, 8, 2);
		return ($day.'-'.$month.'-'.$year);
	}
	
	function get_res($class)	{
		if($class == "6th_class")	{
			$class = "6th Class";
		}
		if($class == "7th_class")	{
			$class = "7th Class";
		}
		if($class == "8th_class")	{
			$class = "8th Class";
		}
		if($class == "9th_class")	{
			$class = "9th Class";
		}
		if($class == "10th_class")	{
			$class = "10th Class";
		}
		if($class == "11th_class")	{
			$class = "11th Class";
		}
		if($class == "12th_class")	{
			$class = "12th Class";
		}
		if($class == "6th_add")	{
			$class = "6th Admission (JNVST)";
		}
		if($class == "9th_add")	{
			$class = "9th Admission (JNVST)";
		}
		if($class == "11th_add")	{
			$class = "11th Admission (JNVST)";
		}
		return $class;
	}
?>