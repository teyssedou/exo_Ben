<?php

class Connexion
{
    private static $link = null;

    public static function getLink()
    {
        if (self :: $link) {
            return self :: $link;
        } else {
            $servername = 'localhost';
            $username = 'root';
            $password = 'simplonco';
            $dbname = 'Voiture_exo';
            $charset = 'utf8';
            $collate = 'utf8_unicode_ci';

            $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";

            self :: $link = new PDO($dsn, $username, $password);

            return self :: $link;
        }
    }

    public static function __callStatic($name, $args)
    {
        $callback = array(self :: getLink(), $name);

        return call_user_func_array($callback, $args);
    }
}
