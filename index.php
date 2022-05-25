<?php
class Movie {
    public $titolo;
    public $genere;
    public $visibility;
    public $lingua;

    function __construct($_nomeFilm, $_genere, $linguaFilm){
        $this->titolo = $_nomeFilm;
        $this->genere = $_genere;
        $this->lingua = $linguaFilm;
    }
    public function setVisibility($eta){
        if($eta > 14){
            $this->visibility = "Per tutte le età";
        }
        else{
            $this->visibility = "Vietato ai minori di 14 anni";
        }
    }
    public function getVisibility(){
        return $this-> visibility;
    }
};


$filmUno =new Movie("Wall street", "Drammatico", "Inglese");
$filmUno->setVisibility(54);
$filmDue = new Movie("Batman", "Fantasy", "Italiano");
$filmDue->setVisibility(20);
$filmTre = new Movie("Scream", "Horror", "Giapponese");
$filmTre->setVisibility(10);
$visibility_filmTre = $filmTre->getVisibility();
var_dump ($filmUno, $filmDue, $filmTre);

