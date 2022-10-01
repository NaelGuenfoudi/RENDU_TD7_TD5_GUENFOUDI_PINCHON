<?php
namespace iutnc\deefy\render;

use iutnc\deefy\audio\lists\AudioList;

require_once 'Renderer.php';

class AudioListRenderer implements Renderer{

  public AudioList $list;

  public function __construct(AudioList $l){
    if ($l!=null) {
      $this->list=$l;
    }
  }

  public function render(int $selector=Renderer::LONG):string{
    $res="";
    $res.='<h1>'.$this->list->nom.'</h1>';
    $res.="<ul>";
    foreach ($this->list->trackList as $value) {
      if ($value instanceof AlbumTrack) {
        $render=new AlbumTrackRenderer($value);
      }else $render = new PodcastRenderer($value);
      $res.="<li>".$render->ecrire_Long();
    }
    $res.='<li>duree :'.$this->list->dureeTotale ;
    $res.='<li>nb de piste :'. $this->list->nombreDePiste;
    $res.="</ul>";
    return $res;
  }

}
