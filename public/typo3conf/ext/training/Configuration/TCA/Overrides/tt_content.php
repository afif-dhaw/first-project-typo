<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        // LLL:EXT:training/Resources/Private/Language/Tca.xlf:training_ceHeroElement
        'ce Hero Element',
        'training_ceHeroElement',
        'ce-hero',
    ],
    'header',
    'before'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
     [
         // LLL:EXT:training/Resources/Private/Language/Tca.xlf:training_ceHeroElement
         'ce Footer Teaser',
         'training_ceFooterTeaser',
         'ce-hero',
     ],
     'textmedia',
     'after'
 );
 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
     [
         'ce Image Teaser',
         'training_ceImageTeaser',
         'ce-hero',
     ],
     'textmedia',
     'after'
 );
$temporaryColumn = [
    'startdate' => [
        'label' => 'Start Date',
       'config' => [
        'type' => 'input',
        'renderType' => 'inputDateTime',
        'eval' => 'datetime',
       ],
    ],
    'enddate' => [
        'label' => 'End Date',
        'config' => [
         'type' => 'input',
         'renderType' => 'inputDateTime',
         'eval' => 'datetime',
        ],
     ],
     'training_teaser'=>[
        'label'=>'Image Teaser',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'training_teaser',
            'foreign_field' => 'parent_uid',
            'maxitems' => 9999,
            'appearance' => [
                'collapseAll' => 1,
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => 1,
                'showPossibleLocalizationRecords' => 1,
            ],
            'behaviour' => [
                'mode' => 'select',
                'localizeChildrenAtParentLocalization' => 1,
            ],
        ], 
    ]
 ];
 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumn);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['training_ceHeroElement'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
    header,subheader,image,bodytext,startdate,enddate
    ',
];
$GLOBALS['TCA']['tt_content']['types']['training_ceFooterTeaser'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
    media;Logo,
    image;Image Background,
    header,
    subheader; Event Title,
    heade_link,startdate,enddate
    ',
];

// -----------------this content element config tca --------------------------------
$GLOBALS['TCA']['tt_content']['types']['training_ceImageTeaser'] = [  
    'showitem'=>'
    training_teaser
    ',
  
];


