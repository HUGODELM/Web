<?php

class ConcertDB extends Concert {
    private $_db;
    private $_array = array();

    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }
    public function getConcert(){
      try{
          $query = "select * from concert order by id_concert";
          $resultset = $this->_db->prepare($query);
          $resultset->execute();

          while($data = $resultset->fetch()){
              $_array[] = $data;
          }
      }
      catch(PDOException $e){
          print $e->getMessage();
      }
      if(!empty($_array)){
          return $_array;
      }
      else {
          return null;
      }
    }
    public function updateConcert($champ, $nouveau, $id){
      try{
          $query="UPDATE concert set ".$champ." = '".$nouveau."' where id_concert ='".$id."'";
          $resultset = $this->_db->prepare($query);
          // $resultset->bindValue(':champ',$champ);
          // $resultset->bindValue(':nouveau',$nouveau);
          // $resultset->bindValue(':id',$id);
          $resultset->execute();

      }catch(PDOException $e){
          print $e->getMessage();
      }
      }
      public function insertConcert(){
        try{
        $query="insert into concert(ville,lieu,date) values ('nomVille','nomLieu','nomDate');";
        $resultset = $this->_db->prepare($query);
        $resultset->execute();

    }catch(PDOException $e){
        print $e->getMessage();
    }
      }
  }
