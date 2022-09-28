<?php

class Autoloader {
   private string $prefixe;
    private string $chemin;

    public function __construct(string $prefixeP,string $cheminP){
        $this->prefixe=$prefixeP;
        $this->chemin=$cheminP;
    }
    public function loadClass(string $nameclass)
    {
        $path_to_file = $this->chemin . $nameclass . 'php';
        if (file_exists($path_to_file)) {
            require_once $path_to_file;
        }
    }
    public function register(){
        spl_autoload_register([__CLASS__,'autoload']);
    }

}