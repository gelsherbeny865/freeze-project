<?php
class user
{
  private function connection(){
  return  mysqli_connect("localhost","root","","test1");
  }

 public  function signup($name,$email,$password){

  $sql = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
  mysqli_query($this->connection(),$sql);

  $res = mysqli_affected_rows($this->connection());

  if($res == 1){
      return true;
  }else{
      return false;
  }
}
public function login($password,$email){
  $sql="SELECT * FROM `users` WHERE `password`='$password' && `email`='$email'";
 $q= mysqli_query($this->connection() , $sql);
 
$res = mysqli_fetch_assoc($q);
 return $res;
}
}
$obj=new user();



?>

