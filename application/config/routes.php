<?php

return [

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'applications' => [
        'controller' => 'main',
        'action' => 'applications',
    ],

    'applications/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'applications',
    ],

    'detail/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'detail',
    ],

    'login' => [
        'controller' => 'admin',
        'action' => 'login',
     ],

    'admin/applications' => [
        'controller' => 'admin',
        'action' => 'applications',
    ],

    'admin/applications/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'applications',
    ],

    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],

];