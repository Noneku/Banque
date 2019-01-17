<?php
/**
 * Class to connect to the data base
 */
class dataBase {
  const host  = "localhost";
  const dbName = "ICBC";
  const login = "phpmyadmin";
  const mdp = "abcdef1996";
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
