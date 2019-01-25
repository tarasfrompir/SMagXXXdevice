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
        $line = substr(fgets($file), 0, -2);
        echo ($line);
        if (!file_exists(ROOT.$line)) {
            @unlink(ROOT.$line);
        }
    }
    fclose($file);
  }

  parent::uninstall();
 }
}
