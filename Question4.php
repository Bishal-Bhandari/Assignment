<!DOCTYPE html>
<html>
<head>
	<title>Question 4</title>
</head>
	<body>
		<?php
		
		class stringProcess
			{
					
				function stringProcessFun($file)
				{
				  	
						while (!feof($file) ) 
											{	
												$sp=" ";
												$strings = fgets($file);
											 	$strArray =  explode(" ", $strings); //reading string to array
											 	$arrlength=count($strArray); //counting array length
											    $uqArray =  array_unique($strArray); //removing duplicated words from array
											    	echo "Duplicate eliminated:&nbsp;&nbsp;&nbsp;";
													for ($i=0; $i <=$arrlength-1; $i++) 
													{ 
														if ($uqArray[$i]!==$uqArray[$i+1]) //removing any remaining duplication
														{
															echo $uqArray[$i].$sp;
														}
														else
														{
															break;
														}
												
													}

													//process for finding the number of duplicated string and unique words
													$arrCount=array();
													for($i=0;$i<$arrlength-1;$i++)
													{
														$key=$strArray[$i];
														// echo $key;
														if($arrCount[$key]>=1)
														{
															$arrCount[$key]++;
														}
														else
														{
															$arrCount[$key]=1;
														}
													}



													$val=array_values($arrCount); //value of repetation of string
													for ($i=0; $i < $arrlength-1; $i++) 
													{ 
														if ($val[$i]==1) 
														{
															$uqStr[$i]=$strArray[$i];
														}
														// echo "<pre>";
														if ($val[$i]>1)
														{
															$nuStr[$i]=$strArray[$i].'=>'.$val[$i];
													
														}
													}
													
													echo "<br>unique words:&nbsp;&nbsp;&nbsp;";
													foreach ($uqStr as $prtVal) 
													{
														echo $prtVal." "; 
													}
													
													echo "<br>duplicate words:&nbsp;&nbsp;&nbsp;";
													foreach ($nuStr as $prtValue)
													{
														echo $prtValue." ";
													}
											}
				}
			}
			$fileName = fopen("input_sentence.txt", "r") or die("Unable to open file!"); //file to open
			$obj=new stringProcess;
			$obj->stringProcessFun($fileName);
					
		?>
	</body>
</html>