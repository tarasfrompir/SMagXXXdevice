<?
require_once(dirname(__FILE__)."/classes_for_addons/SMagXXXdevice_class1.php");
$adress = $this->getProperty("CONTROLADDRESS");
$password = $this->getProperty("PASSWORD");

// Create Chromecast object and give IP and Port
$mag = new MAG250();
$mag->key_setting($adress, $password);
$this->setProperty("setting",0);