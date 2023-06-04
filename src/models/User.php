<?php

namespace Models;

include_once 'Database.php';

// session_start();

use PDO;
use Models\Database;

class User
{

  private $id;
  private $login;
  private $password;
  private $email;
  private $role;

  private $date;

  public function getId()
  {
    return $this->id;
  }

  public function getLogin()
  {
    return $this->login;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getRole()
  {
    return $this->role;
  }

  // Metody manipulacji danymi

  public function setLogin($login)
  {
    $this->login = $login;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }

  // Metody związane z bazą danych
  /**
   * get user by login and password
   *
   * @param string $login
   * @param string $password
   * 
   * @return object
   */
  public static function login($login, $password)
  {
    $db = new Database();
    $query = "SELECT * FROM users WHERE login = :login AND password = :password";
    $stmt = $db->query($query, [':login' => $login, ':password' => $password]);
    $user = $stmt->fetchObject("Models\User");
    return $user;
  }
}
