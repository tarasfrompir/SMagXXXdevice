<?
require_once(dirname(__FILE__)."/classes_for_addons/SMagXXXdevice_class1.php");
$adress = $this->getProperty("ipaddres");
$password = $this->getProperty("password");

// Create Chromecast object and give IP and Port
$mag = new MAG250();
$mag->key_7($adress, $password);
$this->setProperty("7",0);