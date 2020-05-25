<?php

$this->device_types['zona'] = array(
    'TITLE'=>'Зона',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SZona',
    'PROPERTIES'=>array(
            'loadType'=>array('DESCRIPTION'=>LANG_DEVICES_LOADTYPE,
                '_CONFIG_TYPE'=>'select','_CONFIG_HELP'=>'SdLoadType',
                '_CONFIG_OPTIONS'=>'light='.LANG_DEVICES_LOADTYPE_LIGHT.
                    ',heating='.LANG_DEVICES_LOADTYPE_HEATING.
                    ',vent='.LANG_DEVICES_LOADTYPE_VENT.
                    ',curtains='.LANG_DEVICES_LOADTYPE_CURTAINS.
                    ',gates='.LANG_DEVICES_LOADTYPE_GATES.
                    ',power='.LANG_DEVICES_LOADTYPE_POWER.
                    ',gates='.LANG_DEVICES_LOADTYPE_GATES.
                    ',power='.LANG_DEVICES_LOADTYPE_POWER),
            'icon'=>array('DESCRIPTION'=>LANG_IMAGE,'_CONFIG_TYPE'=>'style_image','_CONFIG_HELP'=>'SdIcon')
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
