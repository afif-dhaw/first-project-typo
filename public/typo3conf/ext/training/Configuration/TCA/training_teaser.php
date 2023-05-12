<?php
$GLOBALS['TCA']['training_teaser'] = [
    'ctrl' => [
        'title' => 'Training Teaser',
        'label' => 'text',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'ORDER BY crdate ASC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:training/Resources/Public/Icons/Extension.svg',
    ],
    'columns' => [
        'image' => [
            'label' => 'Image Teaser',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'maxitems' => 1,
                    'minitems' => 0,
                    'appearance' => [
                        'showPossibleLocalizationRecords' => true,
                        'showAllLocalizationLink' => true,
                        'showSynchronizationLink' => true,
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],        
    'text' => [        
        'label' => 'Text',        
        'config' => [            
            'type' => 'text',            
            'cols' => 40,            
            'rows' => 5,        
        ],
    ],
    'color' => [        
        'label' => 'Choose Color',        
        'config' => [            
            'type' => 'input',            
            'renderType' => 'colorpicker',        
        ],
    ],
    'link' => [        
        'label' => 'Link',        
        'config' => [            
            'type' => 'input',        
        ],
],

    ],
    'types' => [
        '0' => [
            'showitem' => 'header,image, text, color, link',
        ],
    ],
];