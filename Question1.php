<!DOCTYPE html>
<html>
<head>
	<title>Question 1</title>
</head>
	<body>
		<?php
		
		class file
		{
			 public function fileHandle()
				  {
				  	$file = fopen("input_numbers.txt", "r") or die("Unable to open file!"); //file to open
						while (!feof($file) ) 
							{
								$num = fgets($file);
								$numb = explode(",", $num); //reading number to array after excluding comma
								sort($numb);  //sorting number in ascending order
								$fnum = implode(",", $numb); //adding comma as seperater for number in between array index
						   		//echo $fnum;
							}
					file_put_contents('output_numbers.txt', print_r($fnum, TRUE)); // save array data to given file name file
				    return TRUE;
				  }
		}

		$obj = new file;
 		echo $obj->fileHandle(); // print status of file written or not
		?>
	</body>
</html>