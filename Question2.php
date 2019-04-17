<!DOCTYPE html>
<html>
<head>
	<title>Question 2</title>
</head>
	<body>
		<?php
				
			class compare
			{
					
				function compareInput($array,$digit)
				{
					if($array==$digit) //compare if both var have same digita
						{
							return 1;
						}
					else
						{
							return 0;
						}
				}
			}

			$arr=array("0","2","5","4"); //i have used static input ignoring leading zeros
			$dig=254;
			$arr=implode("",$arr); //conver array to string of numbers
			$obj = new compare; //object creation
			echo $obj->compareInput($arr,$dig); //pass value and printing return data
		?>
	</body>
</html>