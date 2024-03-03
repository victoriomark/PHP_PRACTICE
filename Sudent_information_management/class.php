<?php
class  Student
{
    public $name;
    public $age;
    public $address;
    public $grade;

//   defining the constructor
    function __construct($name,$age,$address,$grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this-> address = $address;
        $this-> grade = $grade;
    }

// now giving the data in our users

//create a function na getNAME

function GetName()
{
//    returning
   return array(
       'name' =>$this -> name,
        'age' =>$this -> age,
         'address' =>$this ->address,
          'grade'=>$this -> grade
   );
}

function Get_all_info()
{
    return "my name is " .$this->name. " " .$this->age. " year old";
}
}

//constructor
