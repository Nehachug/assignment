<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>

</head>
<body>
<div>

<form action="data.php"  method="post" accept-charset="utf-8">
    
 First_Name: <input type="text" name="First_Name">
  
  <br><br>
  
 Last_Name: <input type="text" name="Last_Name">
 
  <br><br>
 DOB:<input type="text" name="DOB">

  <br><br>
 Phone_Number:<input type="text" name="Phone_Number">
 <br><br>
 
  E-mail: <input type="text" name="email">
  
  <br><br>
  
  Address: <textarea name="Address" rows="5" cols="40"></textarea>
    <br><br>
  Gender:
  <input type="radio" name="Gender" value="female">Female
  <input type="radio" name="Gender" value="male">Male
  <input type="radio" name="Gender" value="other">Other
  
  <br><br>
  
  Subjects:<br>
  <input type="checkbox" name="subjects[]" value="c++">c++<br> 
  <input type="checkbox" name="subjects[]" value="java"> java<br>
<input type="checkbox" name="subjects[]" value="c"> c<br>
<input type="checkbox" name="subjects[]" value="html"> Html<br>
<input type="checkbox" name="subjects[]" value="javascript"> javascript<br>
<input type="checkbox" name="subjects[]" value="dbms"> dbms<br>
<input type="checkbox" name="subjects[]" value="data structure"> data structure<br>
<button type="button">submit</button>
  </form>
</div>

<?php

if(isset($POST))
{

echo "<h2>your input:<h2>";
}
else if(empty($_POST['First_Name'])){
	echo "fname are required";
}
else if(empty($_POST['Last_Name'])){
	echo "lname are required";
}
    else if (empty($_POST["Phone_Number"])) {
    echo "pno. is required"; 
	}
  
 else if (empty($_POST["Email"])) {
    echo "Email is required";
  
  }
    
  else if (empty($_POST["Address"])) {
     echo "address is required";
  }


  else if (empty($_POST["Gender"])) {
    echo "Gender is required";
  } 
  else if (empty($_POST["Subjects"])){
	  echo "subjects are required";

  else{
	
	echo "<b>first name is:</b>".$_POST['First_Name'].<br>;
    echo "<b>last name is:</b>".$_POST['Last_Name'].<br>;
   echo "<b>Phone_Number:</b>".$_POST['Phone_Number'].<br>;
   echo "<b>Email:</b>".$_POST['Email'].<br>;
   echo "<b> address is:</b>".$_POST['Address'].<br>;
   echo "<b>gender is:</b>".$_POST['Gender'].<br>;
   echo "<b>subject is:</b>";
   foreach($_POST['subjects'] as $selected){
	   echo $selected. " ";
   }
  }
?>


</body>
</html>
