<?php
namespace iutnc\deefy\exception;

class NonEditablePropertyException extends \Exception{
  public function __construct(string $s="attributs non modifiable"){
    parrent::__construct($s);
  }
}
