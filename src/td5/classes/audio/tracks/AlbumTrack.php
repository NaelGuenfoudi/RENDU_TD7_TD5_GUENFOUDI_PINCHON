<?php
namespace iutnc\deefy\audio\tracks;

require_once 'AudioTrack.php';

//ex1
class AlbumTrack extends AudioTrack{

//attributs de la classe
  private string $album="";
  private string $annee="";
  private int $numero=0;


//constructeur utilisant uniquement le titre et le chemin d acces au fichier
public function __construct(string $t,string $chemin){
  parent::__construct($t,$chemin);
}

//methode __toStringqui permet de retourner l objet sous la forme d une chaine de caractere
public function __toString():string{
  $res=$this->numero."-".$this->titre." (".$this->auteur.") "." en ".$this->annee." de ".$this->album." <".$this->genre."> ".$this->duree."s "."audio : ".$this->audio;
  return json_encode($res);
}

public function __get(string $at):mixed {
  if (property_exists ($this, $at)) return $this->$at;
  throw new Exception ("$at: invalid property");
}
public function __set(string $at,mixed $val):void {
  if ( property_exists ($this, $at) ) {
    $this->$at = $val;
  } else throw new Exception ("$at: invalid property");
}

}
