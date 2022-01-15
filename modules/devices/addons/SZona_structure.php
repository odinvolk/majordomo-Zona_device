<?php

$this->device_types['zona'] = array(
    'TITLE'=>'Зона',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SZona',
    'PROPERTIES'=>array(
    ),
    'METHODS'=>array(
        'statusUpdated'=>array('DESCRIPTION'=>'Состояние Updated'),
        'switch'=>array('DESCRIPTION'=>'Зона изменить'),
        'taken'=>array('DESCRIPTION'=>'Зона взять'),
        'shoot'=>array('DESCRIPTION'=>'Зона снять')
    )
);

@include_once(ROOT . 'languages/SZona_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SZona_default' . '.php');
