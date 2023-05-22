<?php

namespace Models;

class Bracket{
    private $id;
    private $name;
    private $img;
    private $cena;
    private $cenaSuma;

    // Konstruktor

    public function __construct($id, $name, $img, $cena, $cenaSuma)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->cena = $cena;
        $this->cenaSuma = $cenaSuma;
    }

    // Metody dostępu do pól
    // getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getCena()
    {
        return $this->cena;
    }

    public function getCenaSuma()
    {
        return $this->cenaSuma;
    }

    // setters
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function setCena($cena)
    {
        $this->cena = $cena;
    }

    public function setCenaSuma($cenaSuma)
    {
        $this->cenaSuma = $cenaSuma;
    }

}