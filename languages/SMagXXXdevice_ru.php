<?php
$dictionary = array(
 'SMagXXXdevice_PRESSED' => 'нажата кнопка ',
 'SMagXXXdevice_PATTERN_PRESS' => 'нажми|включи|нажми кнопку|включи канал',
 'SMagXXXdevice_PATTERN_1' => '1|один',
 'SMagXXXdevice_PATTERN_2' => '2|два',
 'SMagXXXdevice_PATTERN_3' => '3|три',
 'SMagXXXdevice_PATTERN_4' => '4|четыре',
 'SMagXXXdevice_PATTERN_5' => '5|пять',
 'SMagXXXdevice_PATTERN_6' => '6|шесть',
 'SMagXXXdevice_PATTERN_7' => '7|семь',
 'SMagXXXdevice_PATTERN_8' => '8|восемь',
 'SMagXXXdevice_PATTERN_9' => 'девять|9',
 'SMagXXXdevice_PATTERN_0' => '0|ноль|нуль'
);
foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  define('LANG_' . $k, $v);
 }
}
