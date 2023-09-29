<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Опрос");
?>
    <main class="main vote">
<? $APPLICATION->IncludeComponent("myComponents:voting.form", "vote_form", array(
    "CACHE_TIME" => "3600",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "VOTE_ID" => "1",    // Идентификатор опроса
    "VOTE_RESULT_TEMPLATE" => "vote_result.php?VOTE_ID=#VOTE_ID#",    // Страница для вывода диаграмм результатов опроса
    "AJAX_MODE" => "Y",
    "AJAX_OPTION_JUMP" => "Y",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "Y"
),
    false
); ?> </main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>