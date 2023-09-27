<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['ITEMS'])): ?>

<?php endif; ?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="track__inner">
        <h3 class="track__title">
            <?= isset($arItem['NAME']) ? $arItem['NAME'] : '' ?>
        </h3>
        <p class="track__text">
            <?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : '' ?>
        </p>
        <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
            <img class="track__img" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="track">
        <?php endif; ?>

    </div>
    </div>
<? endforeach; ?>


