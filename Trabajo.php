<?php
# clase: 
#una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento , estado e idetidad

class profesores{

  private $name;
  private $lastName;
  private $gender;
  private $age;
  private $academicDegree;
  private $groups;
  private $faculty;
  private $degreeCuantity;
  private $maritalStatus;  
  
  public function __construct($name, $lastName, $gender, $age, $academicDegree, $groups, $faculty, $degreeCuantity, $maritalStatus)  {
      $this->_name = $name;
      $this->_lastName = $lastName;
      $this->_age = $age;
      $this->_gender = $gender;
      $this->_academicDegree = $academicDegree;
      $this->_groups = $groups;
      $this->_faculty = $faculty;
      $this->_degreeCuantity = $degreeCuantity;
      $this->_maritalStatus = $maritalStatus;
  }

	public function myShow (){

		echo "<p> hola soy $this->_academicDegree, con un total de $this->_degreeCuantity postgrados. Mi nombre es $this->_name $this->_lastName, soy de la facultad de $this->_faculty tengo $this->_age años, soy del sexo $this->_gender, y a mi cargo tengo $this->_groups grupos  </p>";

  }
}


$p1 = new profesores("Carlos", "Valderrama", "masculino", "24", "PHD en matematicas", "4", "Ingenieria", "3", "casado");
$p1->myShow();
?>