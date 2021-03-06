<?php

class SMagXXXdevice extends module {
/**
* SMagXXXdevice
*
* Module class constructor
*
* @access private
*/
function SMagXXXdevice() {
  $this->name="SMagXXXdevice";
  $this->title=LANG_SMagXXXdevice_MODULE_NAME;
  $this->module_category="<#LANG_SECTION_DEVICES#>";
  $this->checkInstalled();
}

/**
* Install
*
* Module installation routine
*
* @access private
*/
 function install($data='') {
  parent::install();
  $rec = SQLSelectOne("SELECT * FROM project_modules WHERE NAME = '" . $this->name . "'");
  $rec['HIDDEN'] = 1;
  SQLUpdate('project_modules', $rec);
 }
/**
* Uninstall
*
* Module uninstall routine
*
*/
 function uninstall() {

  // удаляем файлы модуля-дополнения
    if ($file = fopen("file_list.txt", "r")) {
    while(!feof($file)) {
        $line = preg_replace('/\p{Cc}+/u', '', fgets($file));
        @unlink(realpath(ROOT.$line));
    }
    fclose($file);
  }
  // удаляем методы и класс устройства
   $rec = SQLSelectOne("SELECT * FROM classes WHERE TITLE = '" . $this->name . "'");
   if ($rec['ID']) {
     SQLExec("DELETE FROM methods WHERE CLASS_ID='".$rec['ID']."'");
     SQLExec("DELETE FROM classes WHERE TITLE='".$this->name . "'");
   }
  parent::uninstall();
 }
}
