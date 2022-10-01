<?php
namespace iutnc\deefy\render;
/**
 *
 */
interface Renderer
{
  public const COMPACT = 1;
  public const LONG = 2;

/**
* retourne une chaine de caractere pour un affichage html specifique selon l entier en parametre
* @param int $selector
* @return string
*/
  public function render(int $selector=1):string;
}
