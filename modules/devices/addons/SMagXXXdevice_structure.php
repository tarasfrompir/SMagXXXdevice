<?php

$this->device_types['MagXXXdevice'] = array(
        'TITLE'=>'Приставка MAG 255',
        'PARENT_CLASS'=>'SDevices',
        'CLASS'=>'SMagXXXdevice',
        'PROPERTIES'=>array(
            'ipaddres'=>array('DESCRIPTION'=>'IP адрес устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'password'=>array('DESCRIPTION'=>'Пароль для устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'groupEco'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_ECO,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupEco'),
            'groupEcoOn'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_ECO_ON,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupEcoOn'),
            'groupSunrise'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_SUNRISE,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupSunrise'),
            'isActivity'=>array('DESCRIPTION'=>LANG_DEVICES_IS_ACTIVITY,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdIsActivity'),
        ),
        'METHODS'=>array(
            'home'=>array('DESCRIPTION'=>'Home key'),
            'ok'=>array('DESCRIPTION'=>'Ok key'),
            'play'=>array('DESCRIPTION'=>'Play key'),
            'stop'=>array('DESCRIPTION'=>'Stop key'),
            'tv'=>array('DESCRIPTION'=>'TV key'),
            'Guide'=>array('DESCRIPTION'=>'Guide key'),
            'app'=>array('DESCRIPTION'=>'App key'),
            'info'=>array('DESCRIPTION'=>'Info key'),
            'back'=>array('DESCRIPTION'=>'Back key'),
            'exit'=>array('DESCRIPTION'=>'Exit key'),
            'menu'=>array('DESCRIPTION'=>'Menu key'),
            'setting'=>array('DESCRIPTION'=>'Setting'),
            'audiomode'=>array('DESCRIPTION'=>'Audio mode'),
            'mute-unmute'=>array('DESCRIPTION'=>'Отключение/включение звука'),
            'volumeup'=>array('DESCRIPTION'=>'Уровень звука up'),
            'volumedown'=>array('DESCRIPTION'=>'Уровень звука down'),
            'pause-unpause'=>array('DESCRIPTION'=>'Отключение/включение паузы'),
            'next'=>array('DESCRIPTION'=>'Следующий трек'),
            'previous'=>array('DESCRIPTION'=>'Предыдущий трек'),
            'seeknext'=>array('DESCRIPTION'=>'Перемотка вперед на 30сек'),
            'seekprevious'=>array('DESCRIPTION'=>'Перемотка назад на 30сек'),
            'stop'=>array('DESCRIPTION'=>'Стоп'),
            '1'=>array('DESCRIPTION'=>'1'),
            '2'=>array('DESCRIPTION'=>'2'),
            '3'=>array('DESCRIPTION'=>'3'),
            '4'=>array('DESCRIPTION'=>'4'),
            '5'=>array('DESCRIPTION'=>'5'),
            '6'=>array('DESCRIPTION'=>'6'),
            '7'=>array('DESCRIPTION'=>'7'),
            '8'=>array('DESCRIPTION'=>'8'),
            '9'=>array('DESCRIPTION'=>'9'),
            '0'=>array('DESCRIPTION'=>'0'),
            'F1'=>array('DESCRIPTION'=>'F1'),
            'F2'=>array('DESCRIPTION'=>'F2'),
            'F3'=>array('DESCRIPTION'=>'F3'),
            'F4'=>array('DESCRIPTION'=>'F4'),
            'turnOn'=>array('DESCRIPTION'=>'turnOn'),
            'turnOff'=>array('DESCRIPTION'=>'turnOff'),
            'switch'=>array('DESCRIPTION'=>'Switch'),
            'up'=>array('DESCRIPTION'=>'key UP'),
            'down'=>array('DESCRIPTION'=>'key DOWN'),
            'left'=>array('DESCRIPTION'=>'key LEFT'),
            'rigth'=>array('DESCRIPTION'=>'key RIGTH'),

        ),
    'INJECTS'=>array(
        'OperationalModes'=>array(
            //'System.stateChanged'=>'SXiGatewayRGB_injects')
         )
	)
);
        
@include_once(ROOT . 'languages/SMagXXXdevice_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SMagXXXdevice_default' . '.php');
