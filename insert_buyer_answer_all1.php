<?php

if ($_POST['q1_input1'] == 'Expected To Generated')
	{
		$QNo1 = $_POST['q3_expectedTo'];
	}
else
	{
		$QNo2 = $_POST['q4_nameOf'];
	}


if ($_POST['q12_2Please'] == 'Under US$50,000')
	{
		$QNo3 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$50,001- US$250,000')
	{
		$QNo4 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$250,001- US$500,000')
	{
		$QNo5 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$500,001 - US$ 750,000')
	{
		$QNo6 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$750,001 US$1,000,000')
	{
		$QNo7 = "T";
	}
else
	{
		$QNo8 = "T";
	}

$BuyerID = $_POST['BuyerID'];

require_once("query/connectivity.php");

	
	$sql="INSERT INTO BuyerAnswerAll1 (BuyerID, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Active) VALUES ('".$BuyerID."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','".$QNo5."','".$QNo6."','".$QNo7."','".$QNo8."','Y')";

	if(mysql_query($sql) ){
    header("location:post_survey_buyer_success.php");
		

	} else{
    
   header("location:post_survey_buyer_fail.php");
    

	}
 
// Close connection
mysql_close($link);

	

?>
