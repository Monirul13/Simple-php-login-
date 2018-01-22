<?php
  
     session_start();
	 require"Demo4.php";
	 
	 
	 if(isset($_POST["submit"]))
	 {
		 
		 
		 if( !empty($_POST["uname"]) && !empty($_POST["password"]))
		 {
			  //print_r($_POST);
     
             $uname=$_POST["uname"];
             $upass=$_POST["password"];
			 $data=Get_Data();
			 
			 //print_r($data);
      
	         //echo $uname;
	         //echo $upass;

		     for($i=0;$i<sizeof($data);$i++)
			 {
				 if( ($data[$i]["Name"]==$uname) && ($data[$i]["Password"]==$upass) && ($data[$i]["Type"]=='User'))
	             {
		             //echo "Welcome to user page";
		             header('location:Normal.php');
					 break;
	             }
 
	             else if( ($data[$i]["Name"]==$uname) && ($data[$i]["Password"]==$upass) && ($data[$i]["Type"]=='Admin'))
	             {
		              //echo "Welcome to admin page";
		             header('location:Admin.php');
					 break;
                 }
			 }
			 
			echo "OPPS...!!!! Usre name or password is invalid";
		  }	 
		 
         else
	     {
		     die("User name and password is required");
         }
			 
}    
	
?>






		
 