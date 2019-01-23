<?php
if ($device_type == 'MagXXXdevice') {
 if (preg_match('/' . LANG_SMagXXXdevice_PATTERN_PRESS . '/uis', $command)) {
  $keys = array(
   '1' => LANG_SMagXXXdevice_PATTERN_1,
   '2' => LANG_SMagXXXdevice_PATTERN_2,
   '3' => LANG_SMagXXXdevice_PATTERN_3,
   '4' => LANG_SMagXXXdevice_PATTERN_4,
   '5' => LANG_SMagXXXdevice_PATTERN_5,
   '6' => LANG_SMagXXXdevice_PATTERN_6,
   '7' => LANG_SMagXXXdevice_PATTERN_7,
   '8' => LANG_SMagXXXdevice_PATTERN_8,
   '9' => LANG_SMagXXXdevice_PATTERN_9,
   '0' => LANG_SMagXXXdevice_PATTERN_0
  );
  foreach($keys as $key_code => $key_words) {
   if(preg_match('/' . $key_words . '/uis', $command)) {
    //$run_code .= "setGlobal('$linked_object.color', $color_code);";
    sayReplySafe(LANG_SMagXXXdevice_PRESSED . ' ' . $key_code . ' на устройстве ' . $device_title, 2);
    $run_code .= "callMethodSafe('$linked_object.'.$key_code);";
    $processed = 1;
    $reply_confirm = 1;
    break;
   }
  }
}
