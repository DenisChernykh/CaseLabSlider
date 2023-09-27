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

<?php if(!empty($arResult['ITEMS'])):?>


<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
      
    <div class="evo-black__inner">
        <div class="evo-black__info">
            <h3 class="evo-black__title">
                <?= isset($arItem['NAME']) ? $arItem['NAME'] : '' ?>
            </h3>
            <div class="evo-black__infobox">
                <p class="evo-black__text">
                    <?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : '' ?>
                </p>
                <p class="evo-black__text">
                    <?= isset($arItem['DETAIL_TEXT']) ? $arItem['DETAIL_TEXT'] : '' ?>
                </p>
            </div>
        </div>
        <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
            <img class="evo-black__img" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="Hurican Super Trofeo EVO">
        <?php endif; ?>

        <?php if (!empty($arItem['PROPERTIES']['ATT_CHAR']['VALUE'])): ?>
            <dl class="evo__descr-list">
                <?php foreach ($arItem['PROPERTIES']['ATT_CHAR']['VALUE'] as $propValue): ?>

                    <div>
                        <dd><?= $propValue ?? ''; ?></dd>
                        <dt><?= $arItem['PROPERTIES']['ATT_CHAR']['DESCRIPTION'] ?></dt>


                    </div>

                <?php endforeach; ?>
            </dl>
        <?php endif; ?>

    </div>
<? endforeach; ?>
<?php endif; ?>