<?php
namespace iutnc\deefy\audio\tracks;

use iutnc\deefy\exception\InvalidPropertyNameException;
use iutnc\deefy\exception\InvalidPropertyValueException;
use iutnc\deefy\exception\NonEditablePropertyException;

class AudioTrack
{

  //attributs de la classe
    protected string $titre;
    protected string $auteur="";
    protected string $genre="";
    protected int $duree=0;
    protected string $audio;

    //constructeur de la classe
  function __construct(string $t, string $nomFiche )
  {
    $this->titre=$t;
    $this->audio=$nomFiche;
  }

  public function __get(string $at):mixed {
    if (property_exists ($this, $at)) return $this->$at;
    throw new InvalidPropertyNameException();
  }

  public function __set(string $at,mixed $val):void {
    if ( property_exists ($this, $at) ) {
      switch ($at) {
        case 'titre':
          throw new NonEditablePropertyException();
          break;
        case 'audio':
          throw new NonEditablePropertyException();
          break;
        case 'duree':
          if ($val>=0) {
            $this->$at = $val;
          }else {
            throw new InvalidPropertyValueException();
          }
          break;
        default:
          $this->$at = $val;
          break;
      }
    } else throw new InvalidPropertyNameException();
  }

}
