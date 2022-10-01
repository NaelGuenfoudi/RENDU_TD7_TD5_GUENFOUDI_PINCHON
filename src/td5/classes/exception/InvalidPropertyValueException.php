<?php
namespace iutnc\deefy\exception;

class InvalidPropertyValueException extends \Exception{
  public function __construct(string $s="la valeur ne doit pas etre superieur a 0"){
    parrent::__construct($s);
  }
}
