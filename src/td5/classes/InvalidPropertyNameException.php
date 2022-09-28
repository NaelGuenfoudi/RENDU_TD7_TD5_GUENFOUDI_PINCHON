<?php
namespace iutnc\deefy\exception;

class InvalidPropertyNameException extends \Exception{

  public function __construct(string $s="attributs inexistants"){
    parrent::__construct($s);
  }
}
