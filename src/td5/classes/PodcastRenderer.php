<?php
namespace iutnc\deefy\render;

use iutnc\deefy\audio\tracks\PodcastTrack;

require_once 'AudioTrackRenderer.php';

class PodcastRenderer extends AudioTrackRenderer
{
  public PodcastTrack $piste;

  function __construct(PodcastTrack $arg)
  {
    $this->piste=$arg;
  }

  function ecrire_Compact():string{
    $res="";
    $res.=$this->piste->titre.": <br>";
    $res.="<ul>";
    $res.="<li>auteur : ".$this->piste->auteur."</li><br>";
    $res.="<li>genre : ".$this->piste->genre."</li><br>";
    $res.="<li>duree : ".$this->piste->duree."s"."</li><br>";
    $res.="<li>date : ".$this->piste->date."</li><br>";
    $res.="<li><audio controls=\"controls\"> <source src=".$this->piste->audio." type=\"audio/wav\">Votre navigateur ne prend pas en charge l'élément <code>audio</code>.</audio></li> <br>";
    $res.="</ul>";
    return $res;
  }

  function ecrire_Long():string{
    $res="";
    $res.="<p>";
    $res.=$this->piste->titre." : ";
    $res.="auteur : ".$this->piste->auteur."; ";
    $res.="genre : ".$this->piste->genre."; ";
    $res.="duree : ".$this->piste->duree."s; ";
    $res.="date : ".$this->piste->date."; ";
    $res.="<audio controls=\"controls\"> <source src=".$this->piste->audio." type=\"audio/wav\">Votre navigateur ne prend pas en charge l'élément <code>audio</code>.</audio></p>";
    return $res;
  }


}
