<?php

if ($device_type == 'MagXXXdevice') {
 if (preg_match('/' . LANG_SXiGatewayRGB_PATTERN_COLOR . '/uis', $command)) {
  $colors = array(
   'ffffff' => LANG_SXiGatewayRGB_PATTERN_WHITE,
   'ff00ff' => LANG_SXiGatewayRGB_PATTERN_MAGENTA,
   '9400d3' => LANG_SXiGatewayRGB_PATTERN_VIOLET,
   '4b0082' => LANG_SXiGatewayRGB_PATTERN_INDIGO,
   '0000ff' => LANG_SXiGatewayRGB_PATTERN_BLUE,
   '00ffff' => LANG_SXiGatewayRGB_PATTERN_CYAN,
   '00ff00' => LANG_SXiGatewayRGB_PATTERN_GREEN,
   'ffff00' => LANG_SXiGatewayRGB_PATTERN_YELLOW,
   'ff7f00' => LANG_SXiGatewayRGB_PATTERN_ORANGE,
   'ff0000' => LANG_SXiGatewayRGB_PATTERN_RED
  );
  foreach($colors as $color_code => $color_words) {
   if(preg_match('/' . $color_words . '/uis', $command)) {
    //$run_code .= "setGlobal('$linked_object.color', $color_code);";
    $run_code .= "callMethodSafe('$linked_object.setColor', array('color'=> '$color_code'));";
    $processed = 1;
    $reply_confirm = 1;
    break;
   }
  }
}
