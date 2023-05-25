<?php
  trait HomeModel{
      //san pham noi bat
      public function productHot(){
          $conn = Connection::getInstance();
          $query = $conn->query("select name,img, price, id from tbl_product where hotproduct=1 order by id desc limit 0,7");
          return $query->fetchAll();
      }
      //san pham moi
      public function productNew(){
          $conn = Connection::getInstance();
          $query = $conn->query("select name,img, price, id from tbl_product where hotproduct=1 order by id desc limit 0,7");
          return $query->fetchAll();
      }
      //public function search(){
        //$conn = Connection::getInstance();
       // $query = $conn->query("select name,img, price, id from tbl_product where tbl.name like '%".$key."%'");
        //return $query->fetchAll();
     // }
  }
?>