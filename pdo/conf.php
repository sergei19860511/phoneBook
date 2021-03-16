<?
session_start();
require(__DIR__ . "/PDO.class.php");

// setting
$DB = new Db("localhost", "3306", "phonebook", "root", "root");

// Select
// $DB->query("SELECT * FROM fruit WHERE name=? and color=?",array('apple','red'));

// Delete
// $DB->query("DELETE FROM fruit WHERE id = ?", array("1"));

// Update
// $DB->query("UPDATE fruit SET color = ? WHERE name = ?", array("yellow","strawberry"));

// Insert
// $DB->query("INSERT INTO fruit(id,name,color) VALUES(?,?,?)", array(null,"mango","yellow"));//Parameters must be ordered


?>