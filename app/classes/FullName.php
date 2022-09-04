<?php
namespace App\classes;


class FullName
{
    protected $firstName;
    protected $middleName;
    protected $lastName;
    protected $fullName;
    public function __construct($data)
    {
        $this->firstName    =$data['first_name'];
        $this->middleName   =$data['middle_name'];
        $this->lastName     =$data['last_name'];
    }

    public function index()
    {
        header("Location: pages/index.php");
    }
    public function getName()
    {
        $this->fullName =$this->firstName.' '.$this->middleName.' '.$this->lastName;
        return $this->fullName;
    }
}