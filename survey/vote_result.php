<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты опроса");
?>

<main class="vote">
    <?$APPLICATION->IncludeComponent("bitrix:voting.result", "vote_result", Array(
        "CACHE_TIME" => "1200",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "QUESTION_DIAGRAM_1" => "histogram",	// Тип диаграммы для вопроса "1. К какой отрасли относится Г..."
        "QUESTION_DIAGRAM_2" => "histogram",	// Тип диаграммы для вопроса "2. Гринатом является"
        "QUESTION_DIAGRAM_3" => "histogram",	// Тип диаграммы для вопроса "3. Масштаб компании"
        "VOTE_ALL_RESULTS" => "N",	// Показывать все результаты
        "VOTE_ID" => "1",	// Идентификатор опроса
    ),
        false
    );?>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>