
<!-- begin of generated class -->
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        personas
* GENERATION DATE:  30.12.2013
* CLASS FILE:       C:\xampp\htdocs\class_generator/generated_classes/class.personas.php
* FOR MYSQL TABLE:  personas
* FOR MYSQL DB:     hotel_village
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* -------------------------------------------------------
*
*/

include_once("resources/class.database.php");

// **********************
// CLASS DECLARATION
// **********************

class personas
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $Id;   // (normal Attribute)
var $Nombre;   // (normal Attribute)
var $Email;   // (normal Attribute)
var $FechaAlta;   // (normal Attribute)
var $IP;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function personas()
{

$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getId()
{
return $this->Id;
}

function getNombre()
{
return $this->Nombre;
}

function getEmail()
{
return $this->Email;
}

function getFechaAlta()
{
return $this->FechaAlta;
}

function getIP()
{
return $this->IP;
}

// **********************
// SETTER METHODS
// **********************


function setId($val)
{
$this->Id =  $val;
}

function setNombre($val)
{
$this->Nombre =  $val;
}

function setEmail($val)
{
$this->Email =  $val;
}

function setFechaAlta($val)
{
$this->FechaAlta =  $val;
}

function setIP($val)
{
$this->IP =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM personas WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysql_fetch_object($result);


$this->Id = $row->Id;

$this->Nombre = $row->Nombre;

$this->Email = $row->Email;

$this->FechaAlta = $row->FechaAlta;

$this->IP = $row->IP;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM personas WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO personas ( Id,Nombre,Email,FechaAlta,IP ) VALUES ( '$this->Id','$this->Nombre','$this->Email','$this->FechaAlta','$this->IP' )";
$result = $this->database->query($sql);
$this->id = mysql_insert_id($this->database->link);

}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE personas SET  Id = '$this->Id',Nombre = '$this->Nombre',Email = '$this->Email',FechaAlta = '$this->FechaAlta',IP = '$this->IP' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
<!-- end of generated class -->
