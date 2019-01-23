<?php

$this->device_types['MagXXXdevice'] = array(
        'TITLE'=>'Приставка MAG 255',
        'PARENT_CLASS'=>'SDevices',
        'CLASS'=>'SMagXXXdevice',
        'PROPERTIES'=>array(
            'password'=>array('DESCRIPTION'=>'Пароль для устройства', 'KEEP_HISTORY'=>1, 'DATA_KEY'=>1),
            'mute_unmute'=>array('DESCRIPTION'=>'Отключение/включение звука', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'mute-unmute', 'DATA_KEY'=>1),
            'volumeup'=>array('DESCRIPTION'=>'Уровень звука выше', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'volumeup', 'DATA_KEY'=>1),
            'volumedown'=>array('DESCRIPTION'=>'Уровень звука ниже', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'volumedown', 'DATA_KEY'=>1),
            'pause_unpause'=>array('DESCRIPTION'=>'Отключение/включение паузы', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'pause-unpause', 'DATA_KEY'=>1),
            'next'=>array('DESCRIPTION'=>'Следующая запись', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'next', 'DATA_KEY'=>1),
            'previous'=>array('DESCRIPTION'=>'Предыдущая запись', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'previous', 'DATA_KEY'=>1),
            'seeknext'=>array('DESCRIPTION'=>'Перемотка вперед на 30сек', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'seeknext', 'DATA_KEY'=>1),
            'seekprevious'=>array('DESCRIPTION'=>'Перемотка назад на 30сек', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'seekprevious', 'DATA_KEY'=>1),
            'stop'=>array('DESCRIPTION'=>'Стоп', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'stop', 'DATA_KEY'=>1),
            '1'=>array('DESCRIPTION'=>'Кнопка 1', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'1', 'DATA_KEY'=>1),
            '2'=>array('DESCRIPTION'=>'Кнопка 2', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'2', 'DATA_KEY'=>1),
            '0'=>array('DESCRIPTION'=>'Кнопка 0', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'0', 'DATA_KEY'=>1),
            '3'=>array('DESCRIPTION'=>'Кнопка 3', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'3', 'DATA_KEY'=>1),
            '4'=>array('DESCRIPTION'=>'Кнопка 4', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'4', 'DATA_KEY'=>1),
            '5'=>array('DESCRIPTION'=>'Кнопка 5', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'5', 'DATA_KEY'=>1),
            '6'=>array('DESCRIPTION'=>'Кнопка 6', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'6', 'DATA_KEY'=>1),
            '7'=>array('DESCRIPTION'=>'Кнопка 7', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'7', 'DATA_KEY'=>1),
            '8'=>array('DESCRIPTION'=>'Кнопка 8', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'8', 'DATA_KEY'=>1),
            '9'=>array('DESCRIPTION'=>'Кнопка 9', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'9', 'DATA_KEY'=>1),
            'F1'=>array('DESCRIPTION'=>'Кнопка F1', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'F1', 'DATA_KEY'=>1),
            'F2'=>array('DESCRIPTION'=>'Кнопка F2', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'F2', 'DATA_KEY'=>1),
            'F3'=>array('DESCRIPTION'=>'Кнопка F3', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'F3', 'DATA_KEY'=>1),
            'F4'=>array('DESCRIPTION'=>'Кнопка F4', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'F4', 'DATA_KEY'=>1),
            'audiomode'=>array('DESCRIPTION'=>'Audiomode', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'audiomode', 'DATA_KEY'=>1),
            'menu'=>array('DESCRIPTION'=>'Menu key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'menu', 'DATA_KEY'=>1),   
            'back'=>array('DESCRIPTION'=>'back key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'back', 'DATA_KEY'=>1),   
            'exit'=>array('DESCRIPTION'=>'exit key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'exit', 'DATA_KEY'=>1),  
            'info'=>array('DESCRIPTION'=>'Info key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'info', 'DATA_KEY'=>1),  
            'app'=>array('DESCRIPTION'=>'App key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'app', 'DATA_KEY'=>1),  
            'tv'=>array('DESCRIPTION'=>'TV key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'tv', 'DATA_KEY'=>1),  
            'guide'=>array('DESCRIPTION'=>'Guide key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'guide', 'DATA_KEY'=>1),  
            'play'=>array('DESCRIPTION'=>'Play key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'play', 'DATA_KEY'=>1),  
            'stop'=>array('DESCRIPTION'=>'Stop key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'stop', 'DATA_KEY'=>1), 
            'home'=>array('DESCRIPTION'=>'Home key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'home', 'DATA_KEY'=>1),  
            'ok'=>array('DESCRIPTION'=>'Ok key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'ok', 'DATA_KEY'=>1),  
            'up'=>array('DESCRIPTION'=>'UP key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'up', 'DATA_KEY'=>1),  
            'down'=>array('DESCRIPTION'=>'DOWN key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'down', 'DATA_KEY'=>1),  
            'left'=>array('DESCRIPTION'=>'LEFT key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'left', 'DATA_KEY'=>1),  
            'right'=>array('DESCRIPTION'=>'RIGHT key', 'KEEP_HISTORY'=>1, 'ONCHANGE'=>'rigth', 'DATA_KEY'=>1),  
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

        )
);
