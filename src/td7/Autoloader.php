<?php

namespace td5;
class Autoloader
{
    private string $prefixe;
    private string $chemin;

    public function __construct(string $prefixeP, string $cheminP)
    {
        $this->prefixe = $prefixeP;
        $this->chemin = $cheminP;
    }


    // l autoload s effectue sur le use donc on doit changer afin de le remplacer
    public function loadClass(string $nameclass)
    {
        $path_to_file = str_replace(array($this->prefixe,'\\'),array($this->chemin,'/'),$nameclass) . '.php';//$this->chemin . '/' . $nameclass . '.php';
        echo $path_to_file;
        if (is_file($path_to_file)) {

            require_once $path_to_file;
        }
    }

    public function register()
    {
        spl_autoload_register([__CLASS__, 'loadClass']);
    }

}