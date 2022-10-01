<?php
namespace iutnc\deefy\audio\lists;

require_once 'AudioList.php';

class Playlist extends AudioList{

  public function __construct(string $nom,array $tab){
    parent::__construct($nom,$tab);
  }

  public function ajouterPiste(AudioTrack $piste){
    if (!$this->exists($piste)) {
      $this->trackList[$this->nombreDePiste]=$piste;
      $this->nombreDePiste++;
      $this->dureeTotale+=$piste->duree;
    }
  }

  public function supprPiste(int $indice){
    $piste=$this->trackList[$indice];
    if ($indice<=$this->trackList) {
      for ($i=$indice; $i < count($this->trackList)-1 ; $i++) {
        $this->trackList[$i]=$this->trackList[$i+1];
      }
      $this->nombreDePiste--;
      $this->dureeTotale-=$piste->duree;
    }
  }

  public function exists(AudioTrack $piste):bool{
    $titre=$piste->titre;
    $b=false;
    foreach ($this->trackList as $value) {
      $b= $b || $value->titre==$titre;
    }
    return $b;
  }

  public function ajouterPisteAll(array $list){
    foreach ($list as $value) {
      if (!$this->exists($value)) {
        $this->ajouterPiste($value);
      }
    }
  }

}
