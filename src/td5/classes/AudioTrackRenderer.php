<?php
namespace iutnc\deefy\render;

require_once 'Renderer.php';

abstract class AudioTrackRenderer implements Renderer{

  public abstract function ecrire_Compact():string;

  public abstract function ecrire_Long():string;

  public function render(int $selector=Renderer::LONG):string {
    $res="";
    switch ($selector) {
      case Renderer::COMPACT:
        $res=$this->ecrire_Compact();
        break;
      case Renderer::LONG:
        $res=$this->ecrire_Long();
        break;
    }
    return $res;
  }



}
