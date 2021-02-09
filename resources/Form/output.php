<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="output.php" method="GET" style="width: 800px; margin: auto;">

</body>
</html>


<?php 
		$Question1= $_GET['options1'];
		$Question2= $_GET['Q2'];
		$Question2a=$_GET['Q2a'];
		$Question3= $_GET['Q3'];
		$Question4= $_GET['Q4'];
		$Question5= $_GET['Q5'];
		$Question6= $_GET['Q6'];
		$Question7= $_GET['Q7'];
		$Question8= $_GET['Q8'];
		$Question9 = $_GET['Q9'];
		$Question10a= $_GET['Q10a'];
		$Question10b= $_GET['Q10b'];
		$Question10c= $_GET['Q10c'];
		$Question11= $_GET['Q11'];
		$Question12a= $_GET['Q12a'];
		$Question12b= $_GET['Q12b'];
		$Question12c= $_GET['Q12c'];
		$Question13= $_GET['Q13'];
		$Question14= $_GET['Q14'];
		$Question14a= $_GET['Q14a'];
		$Question15= $_GET['Q15'];
		$Question16= $_GET['Q16'];
		$Question17= $_GET['Q17'];
		$Question18 = $_GET['Q18'];
		$Question19= $_GET['Q19'];
		$Question20= $_GET['Q20'];
		$Question21= $_GET['Q21'];
		$Question22= $_GET['Q22'];
		$Question23= $_GET['Q23'];
		$Question24= $_GET['Q24'];
		$Question25= $_GET['Q25'];
		$Question26= $_GET['Q26'];
		$Question27 = $_GET['Q27'];
		$Question28= $_GET['Q28'];
		$Question29= $_GET['Q29'];
		$Question31= $_GET['Q31'];
		$Question32= $_GET['Q32'];







		echo "<br><br><b>1. Type of Application:</b>&emsp; <br><br>";
		foreach ($Question1 as $Question1) {
			echo "$Question1 <br>";
		}

		echo "<br><b>2. Do you have any valid foreign Passport?: </b>$Question2";
		if ($_GET['Q2']== "Yes")
		{

			echo "<b><br><br>&emsp;&emsp;if yes,Passport No./ Country: </b>  $Question2a";

		}
		else
		 {
		 	echo "";
		 }

		echo "<br><br><b>3. Latest Philippines Passport Number:</b> $Question3"; 
		echo "<br><br><b>4. Date of Issuanance:</b> $Question4 ";
		echo "<br><br><b>5. Place of Issuance :</b> $Question5";

		echo "<h1><center>Application Information</center></h1>"; 
		echo "<b>6. Last Name: </b>$Question6"; 
		echo "<br><br><b>7. First Name: </b>$Question7"; 
		echo "<br><br><b>8. Middle Name: </b>$Question8";
		echo "<br><br><b>9. Citizenship: </b><br><br>";
		foreach ($Question9 as $Question9) {
			echo "$Question9 <br>";
		}
		echo "<br><b>10. Date of Birth:(DD,MM,YY)</b> <br><br><b>Month:</b> $Question10a <br /><b>Day:</b> $Question10b <br /><b>Year:</b> $Question10c"; 
		echo "<br><br><b>11. Sex:</b> $Question11";
		if ($_GET['Q11']== "Male" || "Female") {
		 } 

		 else 
		 {
		 	echo "";
		 }

		echo "<br><br><b>12. Place of Birth(As shown in Old Passport):</b> <br><br> <b>Municipal:</b>   $Question12a <br>   <b>Province:</b>  $Question12b <br />  <b> Country:</b> $Question12c";
		echo "<br><br><b>13. Civil Status:</b> $Question13 <br />";
		if ($_GET['Q13']== "Single" || "Maried" || "Divorced" || "Widowed") {
		 } 

		 else 
		 {
		 	echo "";
		 }
		echo "<br><b>14. If Married, Name of Spouse:</b> $Question14"; 
		echo "<br><br><b>14. a Citizenship of Spouse:</b> $Question14a"; 
		echo "<br><br><b>15. Address in the Philippines(House No./ Street/ Village,Area/Town,City/Province):</b> <br><br>$Question15";

		echo "<h1>  <center>Application's Father's Name</center> </h1>"; 
		echo "<b>16. Last Name:</b> $Question16";
		echo "<br><br><b>17. First Name:</b> $Question17";
		echo "<br><br><b>18. Middle Name:</b> $Question18";
		echo "<br><br><b>19. Father's Citizenship when application was born:</b> $Question19";

		echo "<h1> <center>Application's Mother's Name </center></h1>";  
		echo "<b>20. Last Name: </b>$Question20";
		echo "<br><br><b>21. First Name: </b> $Question21"; 
		echo "<br><br><b>22. Middle Name:</b>$Question22"; 
		echo "<br><br><b>23. Mother's Citizenship when application was born:</b> $Question23<br><br>"; 
		echo "<br><br><b>24. Occupation/Designation of the applicant:</b> $Question24";
		echo "<br><br><b>25. Work Address in the UEA (include Emirate):</b> $Question25";

		echo "<h1><center>Applicant's Information in the UAE</center></h1>";
		echo "<b>26. Your Mobile No.:</b> $Question26";
		echo "<br><br><b>27. Your Landline No.: </b> $Question27"; 
		echo "<br><br><b>28. Your Email Address:</b> $Question28";
		echo "<br><br><b>29. Purpose of Travel:</b> <br><br>";
		foreach ($Question29 as $Question29) {
			echo "$Question29 <br>";
		} 
		echo "<br><br><b>31. Name of the minor's travelling companion :</b> $Question31"; 
		echo "<br><br><b>32. Companion's relationship & Contact Number :</b> $Question32 <br><br><br>";



 ?>