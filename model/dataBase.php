<?php
/**
 * Class to connect to the data base
 */
class dataBase {
  const host  = "loalhost";
  const dbName = "Banque";
  const login = "phpmyadmin";
  const mdp = "Manzakin2603";
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
