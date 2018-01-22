<?php

require"Demo3.php";


function Get_Data()
{
	 $con=Connection_Open();
	 echo"</br>";
	 $query="SELECT * from userinfo";
	 
	 $que_result=mysqli_query($con,$query);
	 
	  $arr=array();
	 while($row=mysqli_fetch_assoc($que_result))
	 {
		 $arr[]=$row;
	 }
      
	  //return $arr;
	 mysqli_free_result($que_result);
	 
	 mysqli_close($con);
	 
	 //return json_decode($jsonData);
	 
	  $decoded=json_encode($arr);
	  
	  return json_decode($decoded,true);
	 
}
     $data=Get_Data();
	 
	 print_r($data);
 
?>