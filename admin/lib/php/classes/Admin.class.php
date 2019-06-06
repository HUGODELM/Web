<?php
class Admin {

    private $_attributs = array();

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    //hydrate les données dans les setters
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $this->$key = $value;
            //on affecte � la cl� sa valeur; le tableau $data est le resultset, tableau associatif
        }
    }

    //getters
    public function __get($pseudo) {
        if (isset($this->_attributs[$pseudo])) {
            return $this->_attributs[$pseudo];
        }
    }

    //setters reçoit les données de la méthode hydrate
    public function __set($pseudo, $valeur) { //$key, $value de hydrate
        $this->_attributs[$pseudo] = $valeur;
    }

}
