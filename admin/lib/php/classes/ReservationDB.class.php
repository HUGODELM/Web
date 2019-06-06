<?php

class ReservationDB extends Reservation {
    private $_db;
    private $_array = array();


    public function __construct($db){//contenu de $cnx (index)
        $this->_db = $db;
    }

    public function insertionReserv($id_disque,$q_disque,$id_c){
        try{
            $query = "insert into commande_reservation(id_c,id_concert,id_disque,q_disque,q_concert) values(:id,:id_concert,:id_disque,:q_disque,:q_concert) ";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id',$id_c);
            $resultset->bindValue(':id_concert',null);
            $resultset->bindValue(':id_disque',$id_disque);
            $resultset->bindValue(':q_disque',$q_disque);
            $resultset->bindValue(':q_concert',null);
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

    public function insertionReservConc($id_concert,$q_concert,$id_c){
        try{
            $query = "insert into commande_reservation(id_c,id_concert,id_disque,q_disque,q_concert) values(:id,:id_concert,:id_disque,:q_disque,:q_concert) ";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id',$id_c);
            $resultset->bindValue(':id_concert',$id_concert);
            $resultset->bindValue(':id_disque',null);
            $resultset->bindValue(':q_disque',null);
            $resultset->bindValue(':q_concert',$q_concert);
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
