<?php

namespace Models;

use PDO;

class Database
{

  private $DB_HOST;
  private $DB_NAME;
  private $DB_USER;
  private $DB_PASS;

  private $pdo;

  public function __construct()
  {

    //load .env no library
    $dotenv = parse_ini_file(APP_ROOT . '/.env');

    $this->DB_HOST = $dotenv['DB_HOST'];
    $this->DB_NAME = $dotenv['DB_NAME'];
    $this->DB_USER = $dotenv['DB_USERNAME'];
    $this->DB_PASS = $dotenv['DB_PASSWORD'];

    $this->pdo = new PDO("mysql:host=$this->DB_HOST;dbname=$this->DB_NAME", $this->DB_USER, $this->DB_PASS);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function query($query, $params = [])
  {
    $stmt = $this->pdo->prepare($query);
    $stmt->execute($params);
    return $stmt;
  }
}
