<?php

class DiscoDB extends Disco{
    private $_db;
    private $_array = array();

    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }

    public function getDisque(){
        try{
            $query = "select * from disque order by id_disque";
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
    public function getIdDisque($nom){
      try{
          $query = "select id_disque from disque where nom_disque=:nom";
          $resultset = $this->_db->prepare($query);
          $resultset->bindValue(':nom',$nom);
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
}
