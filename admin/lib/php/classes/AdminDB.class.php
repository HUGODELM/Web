<?php

class AdminDB extends Admin {
    private $_db;
    private $_array = array();

    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }


    public function getAdmin($username,$mp){
        try{
            $query = "select * from client where pseudo=:pseudo and mp=:mp";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':pseudo',$username);
            $resultset->bindValue(':mp',$mp);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Admin($data);
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
    public function insertAdmin($nom,$pre,$age,$username,$mp){
      try{
        $query="insert into client(nom,prenom,pseudo,age,mp)
            values(:nomFam,:prenom,:pseudo,:age,:mp)";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nomFam',$nom);
            $resultset->bindValue(':prenom',$pre);
            $resultset->bindValue(':pseudo',$username);
            $resultset->bindValue(':age',$age);
            $resultset->bindValue(':mp',$mp);
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

    public function getId($pseudo){
      try{
      $query = "select * from client where pseudo=:pseudo";
      $resultset = $this->_db->prepare($query);
      $resultset->bindValue(':pseudo',$pseudo);
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
