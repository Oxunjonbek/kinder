<?php
return [
    'class' => 'codemix\localeurls\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
//    'enableLanguageDetection' => false,
    'enableDefaultLanguageUrlCode' => true,

    'languages' => ['uz','ru'],
    'rules' => [
        '/' => 'site/index',
    ],
];
