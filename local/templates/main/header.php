<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>


    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">


    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/CSS/swiper-bundle.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/CSS/style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/script.js');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">')
    ?>

    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->


<header class="header">
    <div class="big-container">
        <nav class="nav">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_left", Array(
	
	),
	false
);?>


            <a class="logo" href="#!">
                <img class="logo-img" src="<?=SITE_TEMPLATE_PATH?>/assets/img/Logo.png" alt="logo">
            </a>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_right", Array(
                "COMPONENT_TEMPLATE" => ".default",
                "ROOT_MENU_TYPE" => "right",	// Тип меню для первого уровня
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            ),
                false
            );?>


        </nav>
    </div>
</header>