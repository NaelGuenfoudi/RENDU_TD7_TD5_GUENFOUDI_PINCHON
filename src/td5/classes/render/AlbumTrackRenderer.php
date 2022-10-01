<?php
namespace iutnc\deefy\render;

use iutnc\deefy\audio\tracks\AlbumTrack;
require_once 'AudioTrackRenderer.php';

class AlbumTrackRenderer extends AudioTrackRenderer
{
  public AlbumTrack $piste;

  function __construct(AlbumTrack $arg)
  {
    $this->piste=$arg;
  }


function ecrire_Compact():string{
  $res="";
  $res="piste numero ".$this->piste->numero." ";
  $res.=$this->piste->titre.": <br>";
  $res.="<ul>";
  $res.="<li>auteur : ".$this->piste->auteur."</li><br>";
  $res.="<li>album : ".$this->piste->album."</li><br>";
  $res.="<li>genre : ".$this->piste->genre."</li><br>";
  $res.="<li>duree : ".$this->piste->duree."s"."</li><br>";
  $res.="<li>annee : ".$this->piste->annee."</li><br>";
  $res.="<li><audio controls=\"controls\"> <source src=".$this->piste->audio." type=\"audio/wav\">Votre navigateur ne prend pas en charge l'élément <code>audio</code>.</audio></li> <br>";
  $res.="</ul>";
  return $res;
}

function ecrire_Long():string{
  $res="";
  $res.= "<p>piste numero : ".$this->piste->numero ." ";
  $res.=$this->piste->titre." : ";
  $res.="auteur : ".$this->piste->auteur."; ";
  $res.="album : ".$this->piste->album."; ";
  $res.="genre : ".$this->piste->genre."; ";
  $res.="duree : ".$this->piste->duree."s; ";
  $res.="annee : ".$this->piste->annee."; ";
  $res.="<audio controls=\"controls\"> <source src=".$this->piste->audio." type=\"audio/wav\">Votre navigateur ne prend pas en charge l'élément <code>audio</code>.</audio><p>";
  return $res;
}

}
