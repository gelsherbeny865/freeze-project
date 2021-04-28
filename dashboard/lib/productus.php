<?php
class productus{

    private function  connection(){
        return mysqli_connect("localhost","root","","test1");
    }
    public function insertproducts($title,$description,$img,$userid){
        $query="INSERT INTO `products`(`title`,`description`,`img`,`users_id`) VALUES('$title','$description','$img',$userid)";
        mysqli_query($this->connection(),$query);
      if ( mysqli_affected_rows($this->connection()) ==1){
             return true;
      }
      else{
          return false;
      }
     
    }
    public function selectproducts(){
        $query="SELECT * FROM `products`";
       $q= mysqli_query($this->connection(),$query);
       $data=[];
      while($res= mysqli_fetch_assoc($q)){
          $data[]=$res;
      }
         return $data;
    }
    public function getselectproducts(){

       $query="SELECT * FROM `productsusers`"  ;
       $q=mysqli_query($this->connection(),$query);
       $data=[];
       while( $res= mysqli_fetch_assoc($q)){
        $data[]=$res;
    }
     return $data;
    }
 
    public function deleteproducts($id){
        $query="DELETE FROM `products` WHERE id = $id";
        mysqli_query($this->connection(),$query);
        if(mysqli_affected_rows($this->connection()) == 1){
            return true;
        }
        else{
            return false;
        }
    }
    public function getselectproductsbyid($id){

        $query="SELECT * FROM `productsusers` WHERE `id`=$id"  ;
       $q= mysqli_query($this->connection(),$query);
       $res=  mysqli_fetch_assoc($q);
        return  $res;
     }

  public function updateproducts($desc,$title,$img,$id){
      $query="UPDATE `products` SET `description`='$desc' , `title`='$title'";
      if(!empty($img)){
          $query.= " ,  `img`='$img'";
      }
      $query .=" WHERE `id`=$id ";
      //echo $query;die;
      mysqli_query($this->connection(),$query);
     if( mysqli_affected_rows($this->connection()) == 1){
         return true;
     }
     else{
         return false;
     }
  }
}
$obj1=new productus();

?>