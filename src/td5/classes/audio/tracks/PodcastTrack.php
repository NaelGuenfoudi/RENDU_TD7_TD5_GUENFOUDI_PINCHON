<?php
namespace iutnc\deefy\audio\tracks;

require_once 'AudioTrack.php';

class PodcastTrack extends AudioTrack {

  private string $date="12/12/2012";

  public function __construct(string $t,string $chemin){
    parent::__construct($t,$chemin);
  }

  public function __toString() : string {
    return json_encode($this);
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
