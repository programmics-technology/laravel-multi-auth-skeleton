<?php

return [
    'custom' => [
        'theme' => 'light', // options[String]: 'light'(default), 'dark', 'bordered', 'semi-dark'
        'sidebarCollapsed' => false, // options[Boolean]: true, false(default) (warning:this option only applies to the vertical theme.)
        'navbarColor' => '', // options[String]: bg-primary, bg-info, bg-warning, bg-success, bg-danger, bg-dark (default: '' for #fff)
        'footerType' => 'static', // options[String]: static(default) / sticky / hidden
        'layoutWidth' => 'boxed', // options[String]: boxed(default) / full,
        'showMenu' => true, // options[Boolean]: true(default), false //show / hide main menu (Warning: if set to false it will hide the main menu)
        'pageHeader' => false, // options[Boolean]: true(default), false (Page Header for Breadcrumbs)
        'defaultLanguage' => 'en',    //en(default)/de/pt/fr here are four optional language provided in theme
        'blankPage' => false, // options[Boolean]: true, false(default) (warning:only make true if your whole project without navabr and sidebar otherwise override option page wise)
    ],
];

/* Do changes in this file if you know what it effects to your template. For more infomation refer the <a href="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template//documentation/documentation-laravel.html"> documentation </a> */
