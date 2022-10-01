<?php
namespace iutnc\deefy\audio\lists;

use iutnc\deefy\exception\InvalidPropertyNameException;

abstract class AudioList{

  protected string $nom;
  protected array $trackList = [];
  protected int $nombreDePiste = 0;
  protected int $dureeTotale = 0;

  public function __construct(string $nom,array $initialTrackList=[]){
    $this->nom = $nom;
    $this->trackList = $initialTrackList;
    $this->nombreDePiste = count($this->trackList);
    foreach ($this->trackList as $track) {
      $this->dureeTotale += $track->duree;
    }
  }

  public function __get(string $attrname):mixed {
    if (!property_exists($this, $attrname)) throw new InvalidPropertyNameException("Invalid property name : $attrname");
     return $this->$attrname;
  }

}
