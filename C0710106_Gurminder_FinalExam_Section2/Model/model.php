
<?php

include_once("model/config.php");

class Model {

 public function getlogin()
 {
  // here goes some hardcoded values to simulate the database
  if(isset($_REQUEST['UserName']) && isset($_REQUEST['Password'])){
  
  $user_id=$_REQUEST['UserName'];
  $password=$_REQUEST['Password'];
  
  $con=mysqli_connect('localhost','root','','login2');

$sql="select * from login";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
  
   if($user_id==$row['UserName'] && $password==$row['Password']){
    return 'login';
   }
                        else{
    return 'invalid user';
   }
  }
 }
 
}

}
?>
