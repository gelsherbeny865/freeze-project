<?php
class contactus{
    private function connection(){
        return mysqli_connect("localhost","root","","test1");
    }
    public function insertcontactus($name,$email,$subject,$thoughts){
        $query= "INSERT INTO `contact` (`name`,`email`,`subject`,`thoughts`) VALUES('$name','$email','$subject','$thoughts')" ;
       mysqli_query($this->connection(),$query);
      $res= mysqli_affected_rows($this->connection());
     
      if($res==1){
          return true;
      }
      else{
          return false;
      }
    }
    public function selectcontactus()
    {
        $query="SELECT * FROM `contact`";
       $q= mysqli_query($this->connection(),$query);
       $data=[];
        while($res=mysqli_fetch_assoc($q)){
            $data[]=$res;
        }
        return $data;
    }
}

$obj2=new contactus();




?>