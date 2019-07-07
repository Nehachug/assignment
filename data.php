<?php

if(isset($POST))
{

echo "<h2>your input:<h2>";
}
else if(empty($_POST['First_Name')){
	echo "fname are required";
}
else if(empty($_POST['Last_Name')){
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


















  
   
   
   
   
   ?>