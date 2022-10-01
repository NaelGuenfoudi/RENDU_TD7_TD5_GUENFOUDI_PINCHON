<?php

namespace iutnc\deefy\audio\lists;

use iutnc\deefy\exception\NonEditablePropertyException;

class Album extends AudioList {

private string $artiste='';
private string $dateSortie='';

public function __construct(string $nom,array $tab){
  parent::__construct($nom,$tab);
}

public function __set(string $attrname,mixed $val):void{
  if ($attrname=='artiste' || $attrname=='dateSortie') {
    $this->$attrname=$val;
  }else
  throw new NonEditablePropertyException();
}

}
