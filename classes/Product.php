<?php

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $quantity;
    private $photo;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getPhoto()
    {
        return $this->photo;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        if(!$name){
            echo "Name is required";
            return;
        }
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    public function __construct($name, $description, $price, $quantity)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}
